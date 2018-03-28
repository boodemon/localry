<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use File;
use Image;
use App\Lib;

use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct(){
        $this->path = public_path() . '/images/category/';
    }

    public function index(){
        $rows = Category::orderBy('category_sort')
                        ->orderBy('name')
                        ->paginate(25);
        if( $rows ){
            $jsdata = [];
            if( $rows ){
                foreach( $rows as $row ){
                    $jsdata[] = [
                        'id'    => $row->id,
                        'name' => $row->name,
                        'image' => Lib::exsImg( 'public/images/category/', $row->image  ),
                        'type' => $row->type,
                        'active' => $row->active,
                        'category_sort' => $row->category_sort,
                        'created_at'    => date('Y-m-d H:i:s', strtotime($row->created_at) ),
                        'updated_at'    => date('Y-m-d H:i:s', strtotime($row->updated_at) ),
                    ];
                }
            }
            $res = [
                'result'    => 'successful',
                'data'      => $jsdata,
                'img_path'  => asset('public/images/category/') .'/',//$this->path,
                'code'      => 200
            ];
        }else{
            $res = [
                'result'    => 'error',
                'data'      => $row,
                'code'      => 204
            ];
        }
        return response()->json( $res );
    }

    public function store(Request $request){
        //echo '<pre>', print_r( $request->all() ) ,'</pre>';
        $row = new Category;
        $row->name = $request->input('name');
        $row->category_sort = $request->input('category_sort');
        $row->active = ($request->exists('active') && $request->input('active') == 1 ) ? 'Y':'N';
       	if( $request->input('image')){
            $filename = time() . Lib::ext(  $request->input('image.filename') );
            //file_put_contents($this->path . $filename, base64_decode($request->input('image.value')));
            Image::make(base64_decode($request->input('image.value')))->resize(800,120)->save($this->path . $filename);
            $row->image = $filename;
        }      
        if( $row->save() ){
            $res = [
                'result' => 'successful',
                'code'   => 200
            ];
        }else{
            $res = [
                'result' => 'error',
                'msg'    => 'Cannot Save this category. Please try again.',
                'code'   => 204
            ];
        }
        return response()->json( $res );
    }

    public function edit($id){
        $row = Category::where('id',$id)->first();
        if( $row ){
            $res = [
                'result'    => 'successful',
                'data'      => $row,
                'code'      => 200
            ];
        }else{ 
            $res = [
                'result'    => 'error',
                'data'      => false,
                'msg'       => 'Category not found!!',
                'code'      => 204
            ];
        }
        return response()->json( $res);
    }

    public function update( Request $request ,$id ){
       //echo '<pre>', print_r( $request->all() ) ,'</pre>';
        $row = Category::where('id',$id)->first();
        if( $row ){
            $row->name = $request->input('name');
            $row->category_sort = $request->input('category_sort');
            $row->active = ($request->exists('active') && $request->input('active') == 1 ) ? 'Y':'N';
            if( $request->input('image')){
                $filename = time() . Lib::ext(  $request->input('image.filename') );
                Image::make(base64_decode($request->input('image.value')))->resize(800,120)->save($this->path . $filename);
                //file_put_contents($this->path . $filename, base64_decode($request->input('image.value')));

                File::delete( $this->path . $row->image );
                $row->image = $filename;
            }      
            if( $row->save() ){
                $res = [
                    'result' => 'successful',
                    'code'   => 200
                ];
            }else{
                $res = [
                    'result' => 'error',
                    'msg'    => 'Cannot update this category. Please try again.',
                    'code'   => 204
                ];
            }
        }else{
                $res = [
                    'result' => 'error',
                    'msg'    => 'Category not found. Please try again .',
                    'code'   => 204
                ];
        }
        return response()->json( $res );
    }
    public function destroy($id)
    {
        $ids = explode('-',$id);
 
            if( Category::whereIn('id',$ids)->delete() ){
                $result = [
                    'result'    => 'successful',
                    'code'      => 200
                ];
            }else{
                $result = [
                    'result'    => 'error',
                    'msg'       => 'เกิดข้อผิดพลาดจากระบบไม่สามารถทำการลบข้อมูลได้ โปรดลองใหม่ภายหลัง',
                    'code'      => 204
                ];
    
            }
        return Response()->json($result);
    }
}
