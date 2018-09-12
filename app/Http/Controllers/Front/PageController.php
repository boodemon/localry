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
            'features'  => @json_decode( $this->queryFeature() ),
            'category'  => $cates->groups,
            //'contents' => $cates->content,
            'contents'  => @json_decode( $this->allVideo(16) ),
            'contents2' => @json_decode( $this->allContents(12) ),
            'playlist'  => @json_decode( $this->queryPlaylist() )
        ];
        // echo '<pre>', print_r( $data ) ,'</pre>';
        // echo '<pre>',print_r( $data ),'</pre>';
        //return view('localry.video-feature',$data);
        return view('localry.index.index',$data);
    }

    public function video(){
        $rows = Content::type()
                    ->published()
                    ->inRandomOrder()
                    ->paginate(24);
            $content = [];
            if( $rows ){
                foreach( $rows as $row ){
                    $content[] = Content::fieldRows( $row , Attach::thumbnailRow( $row->id ) );
                }
            }
        $data = [
            'features' => @json_decode( $this->queryFeature() ),
            'rows' => $rows,
            'contents' => @json_decode( json_encode( $content ) ),
        ];
        return view('localry.video',$data);
    }
    public function article($type){
        $rows = Content::type();
        if($type == 'video'){
            $rows = $rows->where('video_link','!=','{"TH":"","CH":""}');
        }else {
            $rows = $rows->where('video_link','{"TH":"","CH":""}');
        }
        $rows = $rows->published()
                    ->inRandomOrder()
                    ->paginate(24);
            $content = [];
            if( $rows ){
                foreach( $rows as $row ){
                    $content[] = Content::fieldRows( $row , Attach::thumbnailRow( $row->id ) );
                }
            }
        $data = [
            'features' => @json_decode( $this->queryFeature() ),
            'rows' => $rows,
            'contents' => @json_decode( json_encode( $content ) ),
            'subject'   => $type == 'video' ? 'ALL VIDEO FEATURE': 'ALL CONTENT FEATURE'
        ];
        return view('localry.video',$data);
    }
    public function allContents($pagi = 24){
        $rows = Content::type()
                        ->published()
                        ->where('video_link','like','%"TH":""%')
                        ->inRandomOrder()
                        ->paginate($pagi);
                        $content = [];
        if( $rows ){
            foreach( $rows as $row ){
                $content[] = Content::fieldRows( $row , Attach::thumbnailRow( $row->id ) );
            }
        }
        return json_encode( $content );
    }

    public function allVideo($pagi = 24){
        $rows = Content::type()
                    ->where('video_link','not like','%"TH":""%')
                    ->published()
                    ->inRandomOrder()
                    ->paginate($pagi);
                    $content = [];
        if( $rows ){
            foreach( $rows as $row ){
                $content[] = Content::fieldRows( $row , Attach::thumbnailRow( $row->id ) );
            }
        }
        return json_encode( $content );
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

    public function allContent($skip = 0 , $take = 0){
        $features = Content::type()->feature()
                            ->published();
        if( $take != 0)
            $features = $features->take( $take)
                                ->skip( $skip );

        $features = $features->inRandomOrder()
                            ->get();
        echo 'count is '. count( $features );
        $data = [];
        if( $features ){
            foreach( $features as $row ){
                $data[] = Content::fieldRows( $row , Attach::thumbnailRow( $row->id ) );
            }
        }
        return json_encode( $data );
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


    /////////////////////////////// Member zone //////////////////////////////////
    //:: Front end url : profile/following/playlist :://
    public function profileFollowingPlaylist(){
        return view('localry.profile-follow-playlist');
    }

    //:: Front end url : profile/following/series :://
    public function profileFollowingSeries(){
        return view('localry.profile-follow-series');
    }

    //:: Front end url : profile/following/categories :://
    public function profileFollowingCategories(){
        return view('localry.profile-follow-categories');
    }

    //:: Front end url : profile/community/find-people :://
    public function profileCommunityFindpeople(){
        return view('localry.profile-community-findpeople');
    }

    //:: Front end url : profile/community/you-follow :://
    public function profileCommunityYoufollow(){
        return view('localry.profile-community-youfollow');
    }

    //:: Front end url : profile/community/follower :://
    public function profileCommunityFollower(){
        return view('localry.profile-community-follower');
    }


    //:: Front end url : profile/my-playlist :://
    public function profileMyPlaylist(){
        return view('localry.profile-myplaylist');
    }

	//:: Front end url : profile/edit-playlist :://
    public function profileEditPlaylist(){
        return view('localry.profile-editplaylist');
    }


    //:: Front end url : profile/my-loved :://
    public function profileMyLoved(){
        return view('localry.profile-myloved');
    }

    //:: Front end url : profile/recently-watched :://
    public function profileRecentlyWatched(){
        return view('localry.profile-recentlywatch');
    }

    //:: Front end url : profile/my-settings/profile :://
    public function profileSettingProfile(){
        return view('localry.profile-setting-profile');
    }


    //:: Front end url : profile/my-settings/notifications :://
    public function profileSettingNoti(){
        return view('localry.profile-setting-noti');
    }

    //:: Front end url : profile/my-settings/email :://
    public function profileSettingEmail(){
        return view('localry.profile-setting-email');
    }

    //:: Front end url : profile/my-settings/connections :://
    public function profileSettingConnection(){
        return view('localry.profile-setting-connection');
    }

    //:: Front end url : profile/my-settings/account :://
    public function profileSettingAccount(){
        return view('localry.profile-setting-account');
    }


    //:: Front end url : member :://
    public function publicProfile(){
        return view('localry.member');
    }




}
