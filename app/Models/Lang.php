<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lang extends Model
{
    protected $table = 'langs';
    
    public static function fieldRows($row){
        return [
            'id'         => $row->id,
            'code'       => $row->code,
            'name'       => $row->name,
            'created_at' => date('Y-m-d H:i:s', strtotime( $row->created_at) ),
            'updated_at' => date('Y-m-d H:i:s', strtotime( $row->updated_at) )
        ];
    }

    public static function allLang(){
        $lang = [];
        $rows = Lang::orderBy('lang_sort')->orderBy('code')->get();
        if( $rows ){
            foreach( $rows as $row ){
                $lang[] = Lang::fieldRows($row);
            }
        }
        return $lang;
    }
}
