@extends('backend.layouts.template')
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
            <form enctype="multipart/form-data" class="form-horizontal" id="frm-language" method="POST" action="{{ $_action }}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                  <input type="hidden" name="id" id="id" value="{{ $id }}" />
                  <input type="hidden" name="_method" value="{{ $_method }}" />
                <div class="clearfix" style="margin-top:10px; padding-left:10px;">
                  <div class="form-group row" >
                    <label class="col-md-3 form-control-label">CATEGORY : </label>
                    <div class="col-md-2">
                      <select class="form-control" name="category_id"></select>
                      <span class="require-category_id"></span>
                    </div>
                  </div>
                </div>
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
                <div class="tab-pane {{ $i == 0 ? 'active' : '' }}" id="{{ $lang->code }}" role="tabpanel">
                    
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">{{ $lang->code }} VIDEO URL : </label>
                        <div class="col-md-8">
                          <input type="text" class="form-control" name="video[{{ $lang->code }}]" />
                          <span class="require-video"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">{{ $lang->code }} IMAGE FRONT : </label>
                        <div class="col-md-8">
                          <input type="file" name="thumb[{{ $lang->code }}]" />
                          <span class="require-thumb"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">{{ $lang->code }} SUBJECT : </label>
                        <div class="col-md-8">
                          <input type="text" class="form-control" name="subject[{{ $lang->code }}]" />
                          <span class="require-subject"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label">{{ $lang->code }} DETAIL : </label>
                        <div class="col-md-8">
                          <textarea type="text" class="form-control editor" name="detail[{{ $lang->code }}]" ></textarea>
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
                  <div class="form-group row" >
                    <label class="col-md-3 form-control-label">SORT : </label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" name="category_sort" />
                      <span class="require-category_sort"></span>
                    </div>
                  </div>

                  <div class="form-group row" >
                    <label class="col-md-3 form-control-label"></label>
                    <div class="col-md-8">
                        <label class="checkbox">
                            <input type="checkbox" name="category_sort" /> ACTIVE
                        </label>
                      <span class="require-category_sort"></span>
                    </div>
                  </div>

                  <div class="form-groups text-right">
                    <button type="submit" class="btn btn-primary">
                      <i class="fa fa-save"></i> SAVE</button>
                    <button type="button" class="btn btn-danger"  data-dismiss="modal">
                      <i class="fa fa-times"></i> CANCEL</button>
                  </div>
                </div>
            </form>
            <!-- /End FORM -->
        </div>
    </div>
@endsection
@section('javascript')
    <script src="{{ asset('public/build/backend/js/content-form.js') }}"></script>
@endsection