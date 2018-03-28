<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Category;
use App\Models\Lang;

class CategoryController extends Controller
{
    public function __construct(){
        $this->langs = Lang::allLang();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Category::orderBy('category_sort')->paginate('24');
        $data = [
            'rows' => $rows,
            '_breadcrumb'   => 'CATEGORY MENU',
            'langs'         => @json_decode($this->langs)
        ];
       
        return view('backend.category.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = new Category;
        $row->subject = json_encode( $request->input('subject') );
        $row->category_sort = $request->input('category_sort');
        $row->category_type = 'menu';
        $row->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Category::where('id',$id)->first();
        if( $row ){
            $data = [
                'code' => 200,
                'data' => Category::fieldRows( $row )
            ];
        }else{ 
            $data = [
                'code' => 202,
                'data' => []
            ];
        }
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $row = Category::where('id',$id)->first();
        $row->subject = json_encode( $request->input('subject') );
        $row->category_sort = $request->input('category_sort');
        $row->category_type = 'menu';
        $row->save();
        return redirect()->back();    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
                    'code'      =>  204
                ];
            }
        return Response()->json($result);
    }
}
