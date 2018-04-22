<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attach extends Model
{
    protected $table = 'attaches';

    public static function fieldRows( $row ){
        return [
            'id'            => $row->id ,
            'ref_id'        => $row->ref_id ,
            'attach_file'   => $row->attach_file ,
            'attach_thumb'  => @json_decode( $row->attach_file ),
            'attach_sort'   => $row->attach_sort ,
            'attach_type'   => $row->attach_type ,
            'created_at'    => strtotime($row->created_at) ,
            'updated_at'    => strtotime($row->updated_at) ,
        ];
    }

    public static function queryThumb($ref_id = 0){
        $row = Attach::where('ref_id',$ref_id)->where('attach_type','content-thumbnail')->first();
        $gdata = [];
        if( $row ){
            $gdata = Attach::fieldRows( $row );
        }
        return json_encode( $gdata );
    }

    public static function queryGallery($ref_id = 0){
        $rows = Attach::where('ref_id',$ref_id)->where('attach_type','content-gallery')->get();
        $gdata = [];
        if( $rows ){
            foreach( $rows as $row ){
                $gdata[] = Attach::fieldRows( $row );
            }
        }
        return json_encode($gdata);
    }

    public static function thumbnailRow($ref_id){
        $row = Attach::where('ref_id',$ref_id)->where('attach_type','content-thumbnail')->first();
        $gdata = [];
        if( $row ){
            $gdata[] = Attach::fieldRows( $row );
        }
        return $gdata;
    }

}
