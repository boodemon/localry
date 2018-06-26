<table class="table table-sm table-data table-bordered">
        <thead>
          <tr>
            <th class="w120">Thumbnail</th>
            <th>Subject</th>
            <th class="w80">Time</th>
            <th class="w120">Sort</th>
            <th class="w120">Comments</th>
            <th class="w120">Vote</th>
            <th class="w40">#</th>
        </tr>
        </thead>
    <tbody class="video-list">
            @if( count($rows) > 0 )
            @foreach( $rows as $row )
            <tr>                    
                <td class="">
                    <img class="img-thumbnail w120" src="{{ asset('public/images/contents/'. @$row->thumb[0]->attach_thumb->$rc ) }}" />
                </td>
                <td>{{ @$row->subject->$rc }}</td>
                <td class="text-center">{{ @$row->video_time->$rc }}</td>
                <td class="text-center">0</td>
                <td class="text-center">0</td>
                <td class="text-center">0</td>
                <td class="text-center">
                    @if( !in_array($row->id,$inplay))
                    <button type="button" title="Add to playlist" class="btn btn-sm btn-primary put-video" data-id="{{ $row->id }}" ><i class="icon-plus"></i></button>
                    @else
                    <i class="fa fa-check fa-2x text-success"></i>
                    @endif
                </td>
            </tr>
            @endforeach
            @endif
    </tbody>
</table>