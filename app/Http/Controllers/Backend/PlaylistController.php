<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Attach;
use App\Models\Category;
use App\Models\Playlist;
use App\Models\Content;
use App\Models\Lang;
use App\Lib;
use DB;
use Auth;
class PlaylistController extends Controller
{
    public function __construct(){
        $this->langs = Lang::allLang();
    }

    public function index(){
        $rows = Category::where('category_type','playlist')
                        ->orderBy('category_sort')
                        ->paginate(24);
        $data = [
            'rows' => $rows,
            '_breadcrumb'   => 'PLAYLIST',
            'langs'         => @json_decode($this->langs)
        ];

        return view('backend.playlist.index',$data);
    }
    public function store(Request $request)
    {
        $row = new Category;
        $row->subject = Lib::setJson( $request->input('subject') );
        $row->category_sort = $request->input('category_sort');
        $row->category_type = 'playlist';
        $row->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $head = Category::type('playlist')->where('id',$id)->first();
        //$rows = Playlist::where('category_id',$id)->orderBy('playlist_sort')->paginate(24);
        $rows = DB::table('playlists as play')
                    ->select('play.id as play_id',
                                'play.content_id',
                                'play.category_id',
                                'play.playlist_sort',
                                'contents.id as c_id',
                                'contents.subject',
                                'contents.video_link',
                                'contents.video_time')
                    ->join('contents','contents.id','=','play.content_id')
                    ->where('play.category_id',$id)
                    ->orderBy('play.playlist_sort')
                    ->orderBy('play.id')
                    ->get();
                    //->paginate(24):

        $langs = @json_decode($this->langs);
        $lng = $langs[0]->code;
        $sbj = @json_decode( $head->subject );
        $data = [
            '_breadcrumb'   => ['<a href="'. url('backend/playlist') .'">PLAYLIST</a>',$sbj->$lng],
            'sbj'           => $sbj,
            'head'          => $head,
            'rows'          => $rows,
            'langs'         => $langs,
            'lng'           => $lng,
            'id'            => $id
        ];
        return view('backend.playlist.video-list',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Category::where('id',$id)->first();
        if( $row ){
            $data = [
                'code' => 200,
                'data' => Category::fieldRows( $row )
            ];
        }else{ 
            $data = [
                'code' => 202,
                'data' => []
            ];
        }
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $row = Category::where('id',$id)->first();
        $row->subject = Lib::setJson( $request->input('subject') );
        $row->category_sort = $request->input('category_sort');
        $row->category_type = 'playlist';
        $row->save();
        return redirect()->back();    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ids = explode('-',$id);
            if( Category::whereIn('id',$ids)->delete() ){
                $result = [
                    'result'    => 'successful',
                    'code'      => 200
                ];
            }else{
                $result = [
                    'result'    => 'error',
                    'msg'       => 'เกิดข้อผิดพลาดจากระบบไม่สามารถทำการลบข้อมูลได้ โปรดลองใหม่ภายหลัง',
                    'code'      =>  204
                ];
            }
        return Response()->json($result);
    }

    public function searchVideo(Request $request){
        $keywords       = $request->input('keywords');
        $category_id    = $request->input('category_id');
        $rows = Content::where(function($query) use ( $keywords ) {
                            $keys = explode(' ', $keywords );
                            foreach( $keys as $no => $key ){
                                $query->where('subject','like','%'. $key .'%');
                            }
                        })->orderBy('subject')->get();
        $vdata = [];
        if( $rows ){
            foreach( $rows as $row ){
                $vdata[] = Content::fieldRows( $row, Attach::thumbnailRow($row->id));
            }
            $vdata = json_encode( $vdata );
        }
        
        $langs = @json_decode($this->langs);
        $data = [
            'rows' => @json_decode( $vdata ),
            'langs'         => $langs,
            'rc'            => $langs[0]->code,
            'inplay'        => Playlist::contentKey($category_id)
        ];
        return view('backend.playlist.video-form',$data);

    }

    public function addVideo(Request $request){
        //echo '<pre>',print_r( $request->all() ) ,'</pre>';
        $chk = Playlist::where('category_id',$request->input('category_id') )
                        ->where('content_id',$request->input('content_id') )
                        ->first();
        $row = $chk ? $chk : new Playlist;
        $row->category_id = $request->input('category_id');
        $row->content_id  = $request->input('content_id');
        if( $row->save() ){
            $data = [
                'code' => 200,
            ];
        }else{ 
            $data = [
                'code' => 202,
            ];
        }
        return response()->json($data);
    }

    public function removeVideo($id){
        $ids = explode('-',$id);
        if( Playlist::whereIn('id',$ids)->delete() ){
            $result = [
                'result'    => 'successful',
                'code'      => 200
            ];
        }else{
            $result = [
                'result'    => 'error',
                'msg'       => 'เกิดข้อผิดพลาดจากระบบไม่สามารถทำการลบข้อมูลได้ โปรดลองใหม่ภายหลัง',
                'code'      =>  204
            ];
        }
    return Response()->json($result);

    }

}
