@extends('backend.layouts.template')
@section('content')
    <div class="card">
      <div class="card-header">
        <i class="icon-directions"></i> Category menu
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
                @foreach( $langs as $i => $lang )
                <th class="">{{ $lang->code }} Subject</th>
                @endforeach
                <th class="w80">Action</th>
            </tr>
          </thead>
          <tbody>
              @if($rows )
                @foreach( $rows as $row )
                <?php 
                    $subject = @json_decode($row->subject);
                ?>
                <tr>                    
                    <td class="text-center">
                        <input type="checkbox" class="checkboxAll" value="{{ $row->id }}" >
                    </td>
                    @foreach( $langs as $i => $lang )
                    <?php $code = $lang->code; ?>
                    <td>{{ $subject->$code }}</td>
                    @endforeach
                    <td class="action">
                        <a title="Edit" class="text-primary onEdit" href="#" data-id="{{ $row->id }}" ><i class="icon-note"></i></a>
                        <a title="Delete" class="text-danger onDelete" data-id="{{ $row->id }}" ><i class="icon-trash"></i></a>
                    </td>
                </tr>
                @endforeach
              @endif
          </tbody>
        </table>
    </div>
</div>
<input type="hidden" name="total" value="{{ $rows->total() + 1 }}" />
@endsection
@section('modal')
    @include('backend.category.modal-form')
@endsection

@section('javascript')
    <script src="{{ asset('public/build/backend/js/category-index.js') }}"></script>
@endsection