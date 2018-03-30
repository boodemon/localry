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
            'subject'       => @json_decode($row->subject) ,
            'category_type' => $row->category_type ,
            'category_sort' => $row->category_sort ,
            'created_at' => date('Y-m-d H:i:s', strtotime( $row->created_at) ),
            'updated_at' => date('Y-m-d H:i:s', strtotime( $row->updated_at) )
        ];
    }

    public static function option($lang = '',$selected=''){
        $rows = Category::orderBy('category_sort')->get();
        $opt = '';
        if( $rows ){
            foreach( $rows as $row){
                $subject = @json_decode( $row->subject);
                $opt .= '<option value="'. $row->id .'" '. ( $row->id == $selected ? 'selected' : '' ) .'>'. $subject->$lang .'</option>';
            }
        }
        return $opt;
    }
}
