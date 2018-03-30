<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Lang;
use App\Models\Content;
class ContentController extends Controller
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
        $rows = Content::orderBy('category_id')->paginate('24');
        $data = [
            'rows' => $rows,
            '_breadcrumb'   => 'CONTENTS DATA',
            'langs'         => @json_decode($this->langs)
        ];
       
        return view('backend.contents.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'row' => [],
            '_breadcrumb'   => ['<a href="'. url('backend/content') .'">CONTENTS DATA</a>','NEW CONTENT'],
            'langs'         => @json_decode($this->langs),
            'id'            => 0,
            '_method'        => 'POST',
            '_action'       => url('backend/content'),
            'gallery'       => []
        ];
       
        return view('backend.contents.form',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
            if( Content::whereIn('id',$ids)->delete() ){
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
        
    public function upload(Request $request){
		if($request->hasFile('file')){
			$file 	= $request->file('file');
			$path 	= 'public/images/contents/';
			Lib::makeFolder($path);
			$name = time().'-'. Lib::encodelink( $file->getClientOriginalName() );
			$ftype = $file->getClientOriginalExtension();
			$filename = $name;
			// . '.' . $ftype;	
			//Image::make($file)->heighten(87)->widen(87)->save($path . 'thumb/' . $filename);
			Image::make($file)->save($path . $filename);
							
			$images = new Images;
			$images->image_name 	= $filename;
			$images->image_type		= 'content';
			$images->save();
			return $images->id;
		}
    }
    	public function imageDelete($id = 0){
		$row = Images::where('id',$id)->first();
		@File::delete('public/images/picture/'. $row->image_name);
		$row->delete();
		return redirect()->back();
	}
	
	public function sortable(Request $request){
		$ref = $request->input('ref');
		parse_str($request->input('pics'),$rows);
		if(isset($rows['rows'])){
			foreach($rows['rows'] as $key => $id ){
				Images::where('id',$id)->update([
					'image_sort' => $key,
				]);
				$sort = $key+1;
				//echo '<p> '. $sort .' => '. $id .'</p>';
			}
		}

	}
}
