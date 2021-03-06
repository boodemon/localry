@extends('backend.layouts.template')
@section('top-search')
    <form class="form-inline" action="{{ url('backend/content') }}" method="GET">
        <div class="form-group mb-2">
          <input type="text"  class="form-control" name="keywords" value="{{ Request::input('keywords') }}" placeholder="Keywords">
        </div>
        <div class="form-group mb-2">
          <select class="form-control" name="group">
              <option value="all">ALL </option>
              {!! App\Models\Category::option( $langs[0]->code ,(Request::exists('group') ? Request::input('group') : '')) !!}
            </select>
        </div>
        <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-search"></i></button>
    </form>
@endsection
@section('content')
    <div class="card">
      <div class="card-header">
        <i class="icon icon-notebook"></i> Contents
        <div class="pull-right">
            <button type="button" id="btn-new" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> New</button>
            <button type="button" class="btn btn-sm btn-danger btn-delete"><i class="fa fa-trash"></i> Delete</button>
        </div>
      </div>
      
      <div class="card-body">
        <table class="table table-sm table-data table-bordered">
          <thead>
            <tr>
                <th class="w20"><input type="checkbox" id="checkAll"/></th>
                <th class="w120">Thumbnail</th>
                <th>Subject</th>
                <th class="w80">Time</th>
                <th class="">Category</th>
                <th class="w120">Vote</th>
                <th class="w120">Comments</th>
                <th class="w120">Last updated</th>
                <th class="w80">Action</th>
            </tr>
          </thead>
          <tbody>
              @if($rows )
                @foreach( $rows as $row )
                <tr>                    
                    <td class="text-center">
                        <input type="checkbox" class="checkboxAll" value="{{ $row->id }}" >
                    </td>
                    <td class="">
                        <img class="img-thumbnail" src="{{ asset('public/images/contents/'. @$row->thumb[0]->attach_thumb->$rc ) }}" />
                    </td>
                    <td>{{ @$row->subject->$rc }}</td>
                    <td class="text-center">{{ @$row->video_time->$rc }}</td>
                    <td>{{ @$cate[$row->category_id]['subject']->$rc }}</td>
                    <td class="text-center">0</td>
                    <td class="text-center">0</td>
                    <td>{{ date('d M Y H:i',$row->updated_at) }}</td>
                    <td class="action">
                    <a title="Edit" class="text-primary onEdit" href="{{ url('backend/content/' . $row->id . '/edit' ) }}" data-id="{{ $row->id }}" ><i class="icon-note"></i></a>
                        <a title="Delete" href="#" class="text-danger onDelete" data-id="{{ $row->id }}" ><i class="icon-trash"></i></a>
                    </td>
                </tr>
                @endforeach
              @endif
          </tbody>
        </table>
    </div>
</div>
@endsection
@section('javascript')
    <script src="{{ asset('public/build/backend/js/content-index.js') }}"></script>
@endsection