<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table = 'playlists';

    public static function contentKey($cate_id=0){
        $content = [];
        $rows = Playlist::where('category_id',$cate_id)->get();
        if( $rows ){
            foreach( $rows as $row ){
                $content[] = $row->content_id;
            }
        }
        return $content;
    }
}
