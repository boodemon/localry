<form enctype="multipart/form-data" class="form-horizontal" id="frm-language" method="POST" action="">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                  <input type="hidden" name="id" id="id" />
                  <input type="hidden" name="_method" />
                  
                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">Subject : </label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="code" id="code"/>
                      <span class="require-code"></span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-md-3 form-control-label">Sort : </label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" name="name" id="name"/>
                      <span class="require-name"></span>
                    </div>
                  </div>

                  <div class="form-groups text-right">
                    <button type="submit" class="btn btn-primary">
                      <i class="fa fa-save"></i> SAVE</button>
                    <button type="button" class="btn btn-danger"  data-dismiss="modal">
                      <i class="fa fa-times"></i> CANCEL</button>
                  </div>
                </form>