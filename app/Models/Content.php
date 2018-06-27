<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';

    public function scopeType($query,$type='content'){
        return $query->where('content_type',$type);
    }

    public function scopePublished($query,$status='Y'){
        return $query->where('published',$status);
    }

    public function scopeFeature($query,$status='Y'){
        return $query->where('feature_video',$status);
    }

    public static function fieldRows($row, $thumb=[], $attach = []){
        return [
            'id'            => $row->id ,
            'category_id'   => $row->category_id ,
            'tags'          => $row->tags ,
            'video_link'    => @json_decode($row->video_link) ,
            'video_time'    => @json_decode($row->video_time) ,
            'subject'       => @json_decode($row->subject) ,
            'detail'        => @json_decode($row->detail) ,
            'published'     => $row->published ,
            'feature_video' => $row->feature_video ,
            'content_type'  => $row->content_type ,
            'content_sort'  => $row->content_sort ,
            'created_at'    => strtotime($row->created_at) ,
            'updated_at'    => strtotime($row->updated_at) ,
            'thumb'         => @$thumb,
            'attach'        => $attach,
            'gallery'       => @json_decode( $attach )
        ];
    }
}
