<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attach extends Model
{
    protected $table = 'attachs';

    public function fieldRows( $row ){
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
}
