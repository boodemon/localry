<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Image;
use File;
use Request as Req;
use App\Lib;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Lang;
use App\Models\Content;
use App\Models\Attach;
use App\Models\Category;
class ContentController extends Controller
{
    public function __construct(){
        $this->langs = Lang::allLang();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Content::orderBy('category_id');
        if( Req::exists('group')){
            if( Req::input('group') != 'all'){
                $rows = $rows->where('category_id',Req::input('group'));
            }
        }
        if( Req::exists('keywords') ){
            if( !empty( Req::input('keywords') ) ){
                $keywords = Req::input('keywords');
                $rows = $rows->where(function($query) use ($keywords){
                    $keys = explode(' ', $keywords);
                    foreach( $keys as $no => $key){
                        $query->where('subject','like','%'. $key .'%');
                    }
                });
            }
        }
        $rows = $rows->paginate('24');
        $cdata = [];
        $langs = @json_decode($this->langs);
        if( $rows ){
            foreach( $rows as $row ){
                $cdata[] = Content::fieldRows( $row, $this->thumbnailRow($row->id),$this->gallery($row->id) );
            }
        }
        $records = Lib::setJson( $cdata );
        $data = [
            'rows'          => @json_decode( $records ),
            '_breadcrumb'   => 'CONTENTS DATA',
            'langs'         => $langs,
            'rc'            => $langs[0]->code,
            'cate'          => $this->category()
        ];
       
        return view('backend.contents.index',$data);
    }
    public function category(){
        $ctdata = [];
        $rows = Category::get();
        if( $rows ){
            foreach( $rows as $row ){
                $ctdata[$row->id] = Category::fieldRows( $row );
            }
        }
        return  $ctdata;
    }
    public function gallery($ref_id){
        $rows = Attach::where('ref_id',$ref_id)->where('attach_type','content-gallery')->get();
        $gdata = [];
        if( $rows ){
            foreach( $rows as $row ){
                $gdata[] = Attach::fieldRows( $row );
            }
        }
        return $gdata;
    }
    public function thumbnailRow($ref_id){
        $row = Attach::where('ref_id',$ref_id)->where('attach_type','content-thumbnail')->first();
        $gdata = [];
        if( $row ){
            $gdata[] = Attach::fieldRows( $row );
        }
        return $gdata;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'row' => [],
            '_breadcrumb'   => ['<a href="'. url('backend/content') .'">CONTENTS DATA</a>','NEW CONTENT'],
            'langs'         => @json_decode($this->langs),
            'id'            => 0,
            '_method'        => 'POST',
            '_action'       => url('backend/content'),
            'gallery'       => []
        ];
       
        return view('backend.contents.form',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //echo "<pre>", print_r( $request->all() ),'</pre>';
        $content = new Content;
        $content->category_id = $request->input('category_id');
        //$row->tags = $request->input('');
        $content->video_link        = Lib::setJson($request->input('video'));
        $content->video_time        = Lib::setJson($request->input('video-time'));
        $content->subject           = Lib::setJson($request->input('subject'));
        $content->detail            = Lib::setJson($request->input('detail'));
        $content->content_type      = 'content';
        $content->content_sort      = $request->input('content_sort');
        $content->published         = $request->has('published') ? 'Y' : 'N';
        $content->feature_video         = $request->has('feature_video') ? 'Y' : 'N';
        $content->save();
        if( $request->input('gimage')){
            foreach( $request->input('gimage') as $i => $id){
                Attach::where('id',$id)->update(['attach_sort' => $i,'ref_id' => $content->id]);
            }
        }
        $this->thumbnail( $request,$content->id);
        return redirect('backend/content');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Content::where('id',$id)->first();
        $cdata = [];
        $langs = @json_decode($this->langs);
        if( $row ){
            $cdata = Content::fieldRows( $row, $this->thumbnailRow($row->id),$this->gallery($row->id) );
        }
        $records = Lib::setJson( $cdata );
        $data = [
            'row'           => @json_decode( $records ),
            '_breadcrumb'   => ['<a href="'. url('backend/content') .'">CONTENTS DATA</a>','UPDATE CONTENT'],
            'langs'         => @json_decode($this->langs),
            'id'            => $id,
            '_method'       => 'PUT',
            '_action'       => url('backend/content/'. $id),
            'gallery'       => []
        ];
       
        return view('backend.contents.form',$data);
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
        $content = Content::where('id',$id)->first();
        $content->category_id = $request->input('category_id');
        //$row->tags = $request->input('');
        $subject = [];
        foreach( @json_decode($this->langs)  as $in => $lng){
            $code = $lng->code;
           // echo 'code '. $code .' subject '. $request->input('subject.'. $code );
            $subject[$code] = $request->input('subject.'. $code );
        }
        $content->video_link        = Lib::setJson($request->input('video'));
        $content->video_time        = Lib::setJson($request->input('video-time'));
        $content->subject           = Lib::setJson($subject,JSON_UNESCAPED_UNICODE);
        $content->detail            = Lib::setJson($request->input('detail'));
        $content->content_type      = 'content';
        $content->content_sort      = $request->input('content_sort');
        $content->published         = $request->has('published') ? 'Y' : 'N';
        $content->feature_video     = $request->has('feature_video') ? 'Y' : 'N';
        $content->save();
        if( $request->input('gimage')){
            foreach( $request->input('gimage') as $i => $id){
                Attach::where('id',$id)->update(['attach_sort' => $i,'ref_id' => $content->id]);
            }
        }
        $this->thumbnail( $request,$content->id);
        return redirect('backend/content');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ids = explode('-',$id);
            if( Content::whereIn('id',$ids)->delete() ){
                $this->delete( $id );
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

    public function delete($refId){
        $rows = Attach::where('ref_id',$refId)->get();
        if( $rows ){
            foreach( $rows as $row ){

                if( $row->attach_type == 'content-gallery'){
                    @File::delete( 'public/images/contents/' . $row->attach_file );
                }

                if( $row->attach_type == 'content-thumbnail'){
                    $atts = @json_decode( $row->attach_file );
                    if( $atts ){
                        foreach( $atts as $att ){
                            @File::delete( 'public/images/contents/' . $row->attach_file );
                        }
                    }
                }

            }
        }

    }
        
    public function upload(Request $request){
		if($request->hasFile('file')){
			$file 	= $request->file('file');
			$path 	= 'public/images/contents/';
			Lib::makeFolder($path);
			$name = time().'-'. Lib::encodelink( $file->getClientOriginalName() ,'check');
			$ftype = $file->getClientOriginalExtension();
			$filename = Lib::filename($name,$path);
			// . '.' . $ftype;	
			//Image::make($file)->heighten(87)->widen(87)->save($path . 'thumb/' . $filename);
			Image::make($file)->save($path . $filename);						
			$images = new Attach;
			$images->attach_file 	= $filename;
			$images->attach_type		= 'content-gallery';
			$images->save();
			$images->save();
			return $images->id;
		}
    }

    public function thumbnail($request,$ref_id = 0){
        $chk = Attach::where('ref_id',$ref_id)->where('attach_type','content-thumbnail')->first();
        $images = $chk ? $chk : new Attach;
        $filename   = [];
        $path 	    = 'public/images/contents/';
        $images->ref_id         = $ref_id;
        $images->attach_type	= 'content-thumbnail';

		if($request->file('thumb')){
            foreach( $request->file('thumb') as $l => $v ){
                if( $request->hasFile('thumb.'. $l ) ){
                    $file 	= $v;
                    Lib::makeFolder($path);
                    $name   = $l .'-' . time().'-'. $ref_id .'.';
                    $ftype  = $file->getClientOriginalExtension();
                    $filename[$l] = $name . $ftype; 
                    Image::make($file)->save($path . $filename[$l]);
                }else{
                    //echo '<p>run else file</p>';
                    $video = $request->input('video.' . $l );
                    //echo '<p>videl url : '. $video .'</p>';
                    if( !$chk ){
                        //echo'<p>run chk false</p>';
                        
                        if( !empty( $video ) ){
                            $thumbnail = 'youtube-thumbnail-' . time();
                            $filename[$l] = Lib::youtubeThumbnail( $video,'upload', $thumbnail,$path);
                        }
                    }else{
                        //echo'<p>run chk true</p>';
                        $link = @json_decode( $chk->attach_file );
                        if( !empty( $link->$l ) ){
                            //echo'<p>run thumb not empty '. $l .'</p>';
                            $filename[$l] = @$link->$l;
                        }else{
                            //echo'<p>run thumb empty '. $l .'</p>';
                            if( !empty( $video ) ){
                                //echo'<p>run video not empty '. $l .'</p>';
                                $thumbnail = 'youtube-thumbnail-' . time();
                                $thumb = Lib::youtubeThumbnail( $video,'upload', $thumbnail,$path);
                                $filename[$l] = $thumb;
                                //echo 'thumb url = '. $thumb .'<br>';
                            }else{ 
                                $filename[$l] = '';
                                //echo'<p>run video empty '. $l .'</p>';
                            }
                        }
                    }
                }
                //echo '<hr>';
            }
            $images->attach_file 	= Lib::setJson($filename);
        }else{
            $filename = '';
            //echo 'run else <br/>';
            foreach( $request->file('video') as $l => $v ){
                $video = $request->input('video.' . $l );
                if( $chk ){
                    $link = @json_decode( $chk->attach_file );
                    if( !empty( $link->$l ) ){
                        $filename[$l] = @$link->$l;
                    }else{ 
                        if( !empty( $video ) ){
                            $thumbnail = 'youtube-thumbnail-' . time();
                            $filename[$l] = Lib::youtubeThumbnail( $video,'upload', $thumbnail,$path);
                        }
                    }
                }else{
                    if( !empty( $video ) ){
                        $thumbnail = 'youtube-thumbnail-' . time();
                        $filename[$l] = Lib::youtubeThumbnail( $video,'upload', $thumbnail,$path);
                    }
                }
            }
            $images->attach_file 	= Lib::setJson($filename);
        }
        //echo '<pre>', print_r( $filename ) ,'</pre>';
        $images->save();
    }

    public function imageDelete($id = 0){
		$row = Attach::where('id',$id)->first();
		@File::delete('public/images/contents/'. $row->attach_file);
		$row->delete();
		return redirect()->back();
	}
	
	public function sortable(Request $request){
		$ref = $request->input('ref');
		parse_str($request->input('pics'),$rows);
		if(isset($rows['rows'])){
			foreach($rows['rows'] as $key => $id ){
				Attach::where('id',$id)->update([
					'attach_sort' => $key,
				]);
				$sort = $key+1;
				//echo '<p> '. $sort .' => '. $id .'</p>';
			}
		}

	}
}
