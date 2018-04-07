<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Lang;
use App\Models\Content;
use App\Models\Attach;
use App\Models\Category;


class PageController extends Controller
{
    public function __construct(){
        $this->langs = Lang::allLang();
        parent::__construct();
        $this->youtube = Content::inRandomOrder()->get();
    }
    public function index(){
        $rows = Content::inRandomOrder()->get();
        $ydata = [];
        if( $rows ){
            foreach( $rows as $row ){
                $thumb = @json_decode( Attach::queryThumb( $row->id ) );
                $gallery = @json_decode( Attach::queryGallery( $row->id ) );
                $ydata[] = Content::fieldRows( $row , $thumb , $gallery  );
            }
        }
        $data = [
            'youtubes' => $ydata,
        ];
        // echo '<pre>',print_r( $data ),'</pre>';
        return view('localry.index',$data);
    }
    
    public function category(){
        $data = [
            'youtubes' => $this->youtube,
        ];
        return view('localry.category',$data);
    }

    public function playlist(){
        $youtubes =  $this->youtube;
        $data = [
            'youtubes'  =>   $youtubes,
            'ytb'       =>      $youtubes[rand(0,12)]['url']
        ];
        return view('localry.playlist',$data);
    }

    public function singleplay($id = 0){
        $youtubes =  $this->youtube;
        $data = [
           'youtubes'  =>   $youtubes,
           'ytb'       => $youtubes[ $id ]
        ];
        return view('localry.singleplay',$data);
    }
    
}
