@extends('backend.layouts.template')
@section('content')
    <div class="card">
      <div class="card-header">
        <i class="fa fa-user"></i> Language setting
        <div class="pull-right">
            <button type="button" id="btn-new" data-id="0" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> New</button>
            <button type="button" class="btn btn-sm btn-danger btn-delete"><i class="fa fa-trash"></i> Delete</button>
        </div>
      </div>
      
      <div class="card-body">
        <table class="table table-sm table-data table-bordered">
          <thead>
            <tr>
                <th class="w20"><input type="checkbox" id="checkAll"/></th>
                <th class="w120">Code</th>
                <th class="">Name</th>
                <th class="w80">Action</th>
            </tr>
          </thead>
          <tbody>
              @if($rows )
                @foreach( $rows as $row )
                <tr>                    
                    <td class="text-center">
                        @if($row->id != 1)
                        <input type="checkbox" class="checkboxAll" value="{{ $row->id }}" >
                        @endif
                    </td>
                    <td>{{ $row->code }}</td>
                    <td>{{ $row->name }}</td>
                    <td class="action">
                        <a title="Edit" class="text-primary onEdit href="#" data-id="{{ $row->id }}" ><i class="icon-note"></i></a>
                        <a title="Delete" class="text-danger onDelete" data-id="{{ $row->id }}" ><i class="icon-trash"></i></a>
                    </td>
                </tr>
                @endforeach
              @endif
          </tbody>
        </table>
    </div>
</div>
@endsection
@section('modal')
    @include('backend.language.modal-form')
@endsection

@section('javascript')
    <script src="{{ asset('public/build/backend/js/backend-language-index.js') }}"></script>
@endsection