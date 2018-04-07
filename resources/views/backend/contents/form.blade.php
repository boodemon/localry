@extends('backend.layouts.template')
@section('stylesheet')
	<link href="{{asset('public/lib/jquery-ui-1.12.1.custom/jquery-ui.css')}}" rel="stylesheet">
	<link href="{{asset('public/lib/plupload-2.1.8/jquery.ui.plupload/css/jquery.ui.plupload.css')}}" rel="stylesheet">
	<link href="{{asset('public/css/picture-preview.css')}}" rel="stylesheet">	
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <i class="icon icon-notebook"></i> Contents
            <div class="pull-right">
                <!--
                <button type="button" id="btn-new" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> New</button>
                <button type="button" class="btn btn-sm btn-default btn-delete"><i class="fa fa-trash"></i> Cancel</button>
                -->
            </div>
        </div>
      
        <div class="card-body">
            <!-- START FORM -->
            <form enctype="multipart/form-data" class="form-horizontal" id="frm-content" method="POST" action="{{ $_action }}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                  <input type="hidden" name="id" id="id" value="{{ $id }}" />
                  <input type="hidden" name="_method" value="{{ $_method }}" />
                <div class="clearfix" style="margin-top:10px; padding-left:10px;">
                  <div class="form-group row" >
                    <label class="col-md-3 form-control-label">CATEGORY : </label>
                    <div class="col-md-4">
                      <select class="form-control" name="category_id">
                          {!! App\Models\Category::option( $langs[0]->code , ( count($row) > 0 ? $row->category_id : '' ) ) !!}
                      </select>
                      <span class="require-category_id"></span>
                    </div>
                  </div>

                  <div class="form-group row" >
                    <label class="col-md-3 form-control-label">PHOTO GALLERY : </label>
                    <div class="col-md-8">
                        <div id="gallery" class="multiupload" upload-url="{{ url('backend/content/upload' ) }}">					
                          <ul id="preview" class="preview">
                            @if( count($row) > 0 && count($row->attach) > 0 )
                              @foreach($row->attach as $g)
                                <li id="gall_{{$g->id}}" class="img-gallery col-sm-4">
                                  <a href="{{ url('backend/content/image-delete/'. $g->id  ) }}" class="color-red del-preview"><i class="icon-close"></i></a>
                                  <b></b><img src="{{ asset( 'public/images/contents/'. $g->attach_file ) }}" id="img-product-{{ $g->id }}" class="img-preview">
                                  <input type="hidden" name="gimage[]" value="{{ $g->id }}" />
                                </li>
                              @endforeach
                            @endif
                          </ul>
                          <button type="button" class="btn btn-default" id="btn-select"><i class="fa fa-image"></i> เลือกรูปภาพ</button>
                        </div>
                    </div>
                  </div>

                  <div class="form-group row" >
                    <label class="col-md-3 form-control-label">SORT : </label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" name="content_sort" value="{{ count($row) > 0 ? $row->content_sort : old('content_sort') }}" />
                      <span class="require-content_sort"></span>
                    </div>
                  </div>

                  <div class="form-group row" >
                    <label class="col-md-3 form-control-label"></label>
                    <div class="col-md-8">
                        <label class="checkbox">
                            <input type="checkbox" name="published" {{ ( count( $row ) > 0 && $row->published == 'Y' ) ? 'checked' : '' }} /> PUBLISH
                        </label>
                      <span class="require-published"></span>
                    </div>
                  </div>

                </div>
                <h4>CONTENT FROM</h4>
                <hr>
              <!-- Start Tab language input header -->
              @if( $langs )
              <ul class="nav nav-tabs" role="tablist">
                @foreach( $langs as  $i => $lang )
                <li class="nav-item">
                  <a class="nav-link {{ $i == 0 ? 'active' : '' }}" data-toggle="tab" href="#{{ $lang->code }}" role="tab" aria-controls="home">{{ $lang->name }}</a>
                </li>
                @endforeach
              </ul>

              <!-- Blog Tab language input -->
              <div class="tab-content">
                <!-- Start Loob tab content input -->
                 @foreach( $langs as $i => $lang )
                 <?php
                  $lc = $lang->code; 
                 ?>
                <div class="tab-pane {{ $i == 0 ? 'active' : '' }}" id="{{ $lang->code }}" role="tabpanel">
                    
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">{{ $lang->code }} VIDEO URL : </label>
                        <div class="col-md-8">
                          <input type="text" class="form-control" name="video[{{ $lang->code }}]" value="{{ count($row) > 0 ? @$row->video_link->$lc : '' }}" />
                          <span class="require-video"></span>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">{{ $lang->code }} VIDEO TIME : </label>
                        <div class="col-md-2">
                          <input type="text" class="form-control" name="video-time[{{ $lang->code }}]" value="{{ count($row) > 0 ? @$row->video_time->$lc : '' }}" />
                          <span class="require-video-time"></span>
                        </div>
                    </div>
                    	<div class="form-group row">
                        <label class="col-md-3 control-label"> &nbsp; </label>
                        <div class="col-md-6" id="preview">
                         @if( count( $row ) > 0 && count( $row->thumb) > 0 )
                            <img src="{{ asset('public/images/contents/'. @$row->thumb->attach_thumb->$lc ) }}" />
                         @endif
                        </div>
                      </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">{{ $lang->code }} IMAGE FRONT : </label>
                        <div class="col-md-8">
                          <input type="file" name="thumb[{{ $lang->code }}]" class="thumb" />
                          <span class="require-thumb"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">{{ $lang->code }} SUBJECT : </label>
                        <div class="col-md-8">
                          <input type="text" class="form-control" name="subject[{{ $lang->code }}]" value="{{ count($row) > 0 ? $row->subject->$lc : '' }}"/>
                          <span class="require-subject"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">{{ $lang->code }} DETAIL : </label>
                        <div class="">
                          <textarea type="text" class="form-control editor" name="detail[{{ $lang->code }}]" >{{ count($row) > 0 ? $row->detail->$lc : '' }}</textarea>
                          <span class="require-detail"></span>
                        </div>
                    </div>
                    
                </div>
                @endforeach
              </div>
              @endif
              <!-- / End Tab language input -->
              <!-- /Form category input -->
              <div class="clearfix" style="margin-top:10px; padding-left:10px;">
                  <div class="form-groups text-right">
                    <button type="submit" class="btn btn-primary" id="btn-save">
                      <i class="fa fa-save"></i> SAVE</button>
                    <button type="button" class="btn btn-danger" >
                      <i class="fa fa-times"></i> CANCEL</button>
                  </div>
              </div>
            </form>
            <!-- /End FORM -->
        </div>
    </div>
@endsection
@section('javascript')
	<script src="{{ asset('public/lib/jquery-ui-1.12.1.custom/jquery-ui.js') }}"></script>
	<script src="{{ asset('public/lib/tinymce/tinymce.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('public/lib/tools/tiny-editor-v2.js')}}" type="text/javascript"></script>
  
	<script type="text/javascript" src="{{asset('public/lib/plupload-2.1.8/plupload.full.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('public/lib/plupload-2.1.8/jquery.plupload.queue/jquery.plupload.queue.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('public/lib/plupload-2.1.8/jquery.ui.plupload/jquery.ui.plupload.js') }}"></script>
	<script type="text/javascript" src="{{asset('public/lib/tools/plupload-v2.js')}}"></script>
  <script src="{{ asset('public/build/backend/js/content-form.js') }}"></script>
@endsection