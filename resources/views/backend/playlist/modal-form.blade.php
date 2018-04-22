<div class="modal fade "  tabindex="-1" id="modal-language" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title pull-left">Playlist form</h4>
            <button type="button" class="close pull-right" aria-label="Close"  data-dismiss="modal">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Form category input -->
            <form enctype="multipart/form-data" class="form-horizontal" id="frm-language" method="POST" action="">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    <input type="hidden" name="id" id="id" />
                    <input type="hidden" name="_method" />
  
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
                          <label class="col-md-3 form-control-label">{{ $lang->code }} Playlist Name : </label>
                          <div class="col-md-8">
                            <input type="text" class="form-control" name="subject[{{ $lang->code }}]" />
                            <span class="require-code"></span>
                          </div>
                      </div>
  
                  </div>
                  @endforeach
                </div>
                @endif
                <!-- / End Tab language input -->
            <!-- /Form category input -->
                
                    <div class="form-group row" style="margin-top:10px; padding-left:10px;">
                      <label class="col-md-3 form-control-label">Sort : </label>
                      <div class="col-md-2">
                        <input type="text" class="form-control" name="category_sort" />
                        <span class="require-category_sort"></span>
                      </div>
                    </div>
  
                    <div class="form-groups text-right">
                      <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save"></i> SAVE</button>
                      <button type="button" class="btn btn-danger"  data-dismiss="modal">
                        <i class="fa fa-times"></i> CANCEL</button>
                    </div>
              </form>
          </div>
    </div>
    </div>
  </div>