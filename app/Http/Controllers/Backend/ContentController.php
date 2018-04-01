<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Image;
use File;
use App\Lib;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Lang;
use App\Models\Content;
use App\Models\Attach;
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
        $cdata = [];
        $langs = @json_decode($this->langs);
        if( $rows ){
            foreach( $rows as $row ){
                $cdata[] = Content::fieldRows( $row, $this->thumbnailRow($row->id),$this->gallery($row->id) );
            }
        }
        $records = json_encode( $cdata );
        $data = [
            'rows'          => @json_decode( $records ),
            '_breadcrumb'   => 'CONTENTS DATA',
            'langs'         => $langs,
            'rc'            => $langs[0]->code,
            'cate'          => $this->category()
        ];
       
        return view('backend.contents.index',$data);
    }
    public function category(){
        $ctdata = [];
        $rows = Category::get();
        if( $rows ){
            foreach( $rows as $row ){
                $ctdata[$row->id] = Category::fieldRows( $row );
            }
        }
        return $ctdata;
    }
    public function gallery($ref_id){
        $rows = Attach::where('ref_id',$ref_id)->where('attach_type','content-gallery')->get();
        $gdata = [];
        if( $rows ){
            foreach( $rows as $row ){
                $gdata[] = Attach::fieldRows( $row );
            }
        }
        return $gdata;
    }
    public function thumbnailRow($ref_id){
        $row = Attach::where('ref_id',$ref_id)->where('attach_type','content-thumbnail')->first();
        $gdata = [];
        if( $row ){
            $gdata[] = Attach::fieldRows( $row );
        }
        return $gdata;
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
        //echo "<pre>", print_r( $request->all() ),'</pre>';
        $content = new Content;
        $content->category_id = $request->input('category_id');
        //$row->tags = $request->input('');
        $content->video_link        = json_encode($request->input('video'));
        $content->subject           = json_encode($request->input('subject'));
        $content->detail            = json_encode($request->input('detail'));
        $content->content_type      = 'content';
        $content->content_sort      = $request->input('content_sort');
        $content->published         = $request->has('published') ? 'Y' : 'N';
        $content->save();
        if( $request->input('gimage')){
            foreach( $request->input('gimage') as $i => $id){
                Attach::where('id',$id)->update(['attach_sort' => $i,'ref_id' => $content->id]);
            }
        }
        $this->thumbnail( $request,$content->id);
        return redirect('backend/content');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
                $this->delete( $id );
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

    public function delete($refId){
        $rows = Attach::where('ref_id',$refId)->get();
        if( $rows ){
            foreach( $rows as $row ){

                if( $row->attach_type == 'content-gallery'){
                    @File::delete( 'public/images/contents/' . $row->attach_file );
                }

                if( $row->attach_type == 'content-thumbnail'){
                    $atts = @json_decode( $row->attach_file );
                    if( $atts ){
                        foreach( $atts as $att ){
                            @File::delete( 'public/images/contents/' . $row->attach_file );
                        }
                    }
                }

            }
        }

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
			$images = new Attach;
			$images->attach_file 	= $filename;
			$images->attach_type		= 'content-gallery';
			$images->save();
			return $images->id;
		}
    }

    public function thumbnail($request,$ref_id = 0){

		if($request->file('thumb')){
            $filename = [];
            foreach( $request->file('thumb') as $l => $v ){
                if( $request->hasFile('thumb.'. $l ) ){
                    $file 	= $v;
                    $path 	= 'public/images/contents/';
                    Lib::makeFolder($path);
                    $name   = $l .'-' . time().'-'. $ref_id .'.';
                    $ftype  = $file->getClientOriginalExtension();
                    $filename[$l] = $name . $ftype; 
                    Image::make($file)->save($path . $name);
                }else{
                    $filename[$l] = null;
                }
                
            }
            
            $images = new Attach;
            $images->ref_id         = $ref_id;
            $images->attach_file 	= json_encode($filename);
            $images->attach_type	= 'content-thumbnail';
            $images->save();
		}
    }

    public function imageDelete($id = 0){
		$row = Attach::where('id',$id)->first();
		@File::delete('public/images/contents/'. $row->attach_file);
		$row->delete();
		return redirect()->back();
	}
	
	public function sortable(Request $request){
		$ref = $request->input('ref');
		parse_str($request->input('pics'),$rows);
		if(isset($rows['rows'])){
			foreach($rows['rows'] as $key => $id ){
				Attach::where('id',$id)->update([
					'attach_sort' => $key,
				]);
				$sort = $key+1;
				//echo '<p> '. $sort .' => '. $id .'</p>';
			}
		}

	}
}
