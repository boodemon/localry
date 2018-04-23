<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Lang;
use App\Models\Content;
use App\Models\Attach;
use App\Models\Category;
use DB;

class PageController extends Controller
{
    public function __construct(){
        $this->langs = Lang::allLang();
        parent::__construct();
        $this->youtube = Content::inRandomOrder()->get();
    }

    public function index(){
        $cates = @json_decode( $this->queryGroup() );
        $data = [
            'features' => @json_decode( $this->queryFeature() ),
            'category' => $cates->groups,
            'contents' => $cates->content,
            'playlist' => @json_decode( $this->queryPlaylist() )
        ];
        // echo '<pre>', print_r( $data ) ,'</pre>';
        // echo '<pre>',print_r( $data ),'</pre>';
        return view('localry.video-feature',$data);
    }
    public function queryFeature(){
        $features = Content::type()           
                            ->feature()
                            ->published()
                            ->inRandomOrder()
                            ->get();
        $data = [];
        if( $features ){
            foreach( $features as $row ){
                $data[] = Content::fieldRows( $row , Attach::thumbnailRow( $row->id ) );
            }
        }
        return json_encode( $data );
    }

    public function queryGroup(){
        $groups = Category::type('menu')
                            ->orderBy('category_sort')
                            ->get();
        $data = [];
        $content = [];
        if( $groups ){
            foreach( $groups as $row ){
                $data[] = Category::fieldRows( $row );
                $content[$row->id] = $this->queryContent( $row->id );
            }
        }
        return json_encode(['groups' => $data , 'content' => $content]);
    }

    public function queryContent($cateId){
        $rows = Content::where('category_id',$cateId )
                        ->inRandomOrder()
                        ->get();
        $data = [];
        if( $rows ){
            foreach( $rows as $row ){
                $data[] = Content::fieldRows( $row , Attach::thumbnailRow( $row->id ) );
            }
        }
        return $data;
    }
    
    public function queryPlaylist(){
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
       // ->where('play.category_id',1)
        ->inRandomOrder()
        ->get();
        $play = [];
        if( $rows ){
            foreach( $rows as $row ){
                $play[] = Content::fieldRows( $row , Attach::thumbnailRow( $row->content_id ) ,Attach::queryGallery($row->content_id));
            }
        }
        return json_encode( $play );
    }
    //:: Front end url : category :://
    public function category($id,$subject=''){
        $row = Category::where('id',$id)->first();
        $data = [
            'category' => @json_decode(json_encode( Category::fieldRows($row) ) ),
            'contents' => @json_decode(json_encode( $this->queryContent( $id ) )),
            'playlist' => @json_decode( $this->queryPlaylist() ),
            'features' => @json_decode( $this->queryFeature() ),
        ];
        return view('localry.category',$data);
    }
    //:: Front end url : Playlist :://

    public function playlist(){
        $data = [
            'playlist' => @json_decode( $this->queryPlaylist() ),
            'features' => @json_decode( $this->queryFeature() ),
        ];
        return view('localry.playlist',$data);
    }
    
    //:: Front end url : singleplay :://
    public function singleplay($id = 0){
        $row = Content::where('id',$id)->first();
        $cont = @json_decode(json_encode( Content::fieldRows( $row, Attach::thumbnailRow( $id ), Attach::queryGallery($id) ) ) ); 
        $recents = @json_decode(json_encode(  $this->queryContent($cont->category_id) ));
        //echo '<pre>', print_r( $recents ) ,'</pre>';
        $data = [
           'recents'  =>   $recents,
           'content'       => $cont,
           'features' => @json_decode( $this->queryFeature() ),
        ];
        return view('localry.singleplay',$data);
    }
    
}
