<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Lang;

class LangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Lang::orderBy('code')->orderBy('name')->paginate(24);
        $data = [
            '_breadcrumb'   => 'Language setting',
            'rows'          => $rows
        ];
        return view('backend.language.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $row = new Lang;
        $row->code = $request->input('code');
        $row->name = $request->input('name');
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
        $row = Lang::where('id',$id)->first();
        if( $row ){
            $data = [
                'code' => 200,
                'data' => Lang::arrField( $row )
            ];
        }else{ 
            $data = [
                'code' => 202,
                'data' => [],
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
        $row = Lang::where('id',$id)->first();
        $row->code = $request->input('code');
        $row->name = $request->input('name');
        $row->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ids = explode('-',$id);
            if( Lang::whereIn('id',$ids)->delete() ){
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
        
    public function checker(Request $request){
        //echo'<pre>',print_r( $request->all()),'</pre>';
        if( $request->input('type') == 'code'){
            $row = Lang::where('code',$request->input('text'))->count();
        }else{
            $row = 0;
        }
        return $row ;
    }

}
