<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public static function fieldRows($row){
        return [
            'id'            => $row->id ,
            'ref_id'        => $row->ref_id ,
            'subject'       => $row->subject ,
            'category_type' => $row->category_type ,
            'category_sort' => $row->category_sort ,
            'created_at' => date('Y-m-d H:i:s', strtotime( $row->created_at) ),
            'updated_at' => date('Y-m-d H:i:s', strtotime( $row->updated_at) )
        ];
    }
}
