<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';

    public static function fieldRows($row, $thumb='', $attach = []){
        return [
            'id'            => $row->id ,
            'category_id'   => $row->category_id ,
            'tags'          => $row->tags ,
            'video_link'    => $row->video_link ,
            'subject'       => $row->subject ,
            'detail'        => $row->detail ,
            'published'     => $row->published ,
            'content_type'  => $row->content_type ,
            'content_sort'  => $row->content_sort ,
            'created_at'    => strtotime($row->created_at) ,
            'updated_at'    => strtotime($row->updated_at) ,
            'thumb'         => $thumb,
            'attach'        => $attach,
        ];
    }
}
