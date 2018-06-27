<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\Models\Category;
use App\Models\Lang;
use View;
use Request;
class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
    public function __construct(){
        View::share('menus',$this->menus() );
        View::share('lngs',@json_decode( Lang::allLang() ) );
        View::share('lng',$this->lang() );        
    }

    public function menus(){
        $rows = Category::where('category_type','menu')
                            ->orderBy('category_sort')->get();
        $meData = [];
        if( $rows ){
            foreach( $rows as $row ){
                $meData[] = Category::fieldRows( $row );
            }
        }
        return $meData;
    }

    public function lang(){
        $lng = '';
        $lngs = @json_decode( Lang::allLang() );
        if( Request::exists('lng') ){
            if( count( $lngs ) > 0 ){
                foreach( $lngs as $ln ){
                    $code = strtoupper(Request::input('lng'));
                    if( $ln->code == $code )
                        $lng = $ln->code;
                }
            }
        }else{ 
            $lng = $lngs[0]->code;
        }
        return !empty( $lng ) ? $lng : $lngs[0]->code;
    }

}
