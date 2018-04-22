@extends('backend.layouts.template')

@section('content')
    <div class="card">
      <div class="card-header">
        <i class="icon icon-notebook"></i> {{ $sbj->$lng }}
        <div class="pull-right">
            <button type="button" id="btn-add" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add video</button>
            <button type="button" class="btn btn-sm btn-danger btn-delete"><i class="fa fa-trash"></i> Remove</button>
            <input type="hidden" name="category_id" value="{{ $id }}" />
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
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
                <th class="w120">Sort</th>
                <th class="w120">Comments</th>
                <th class="w120">Vote</th>
                <th class="w80">Action</th>
            </tr>
          </thead>
          <tbody>
              @if($rows )
                @foreach( $rows as $row )
                <?php
                    $subject = @json_decode($row->subject); 
                    $video_time = @json_decode($row->video_time); 
                    $thumb = @json_decode( json_encode( App\Models\Attach::thumbnailRow($row->c_id) ) );
                ?>
                <tr>                    
                    <td class="text-center">
                        <input type="checkbox" class="checkboxAll" value="{{ $row->play_id }}" >
                    </td>
                    <td class="">
                        <img class="img-thumbnail" src="{{ asset('public/images/contents/'. @$thumb[0]->attach_thumb->$lng ) }}" />
                    </td>
                    <td>{{ @$subject->$lng  }}</td>
                    <td class="text-center">{{ @$video_time->$lng }}</td>
                    <td class="text-center">0</td>
                    <td class="text-center">0</td>
                    <td class="text-center">0</td>
                    <td class="text-center">
                            <button type="button" title="Remove on playlist" class="btn btn-sm btn-danger remove-video" data-id="{{ $row->play_id }}" ><i class="icon-minus"></i></button>
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
    @include('backend.playlist.modal-video')
@endsection


@section('javascript')
    <script src="{{ asset('public/build/backend/js/playlist-video-list.js') }}"></script>
@endsection