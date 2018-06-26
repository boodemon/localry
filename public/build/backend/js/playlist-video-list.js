(function ($) {
    function frm() {
        this.delete = function (id) {
            $.ajax({
                url: _base + '/backend/video-remove/' + id,
                success: function (data) {

                },
                error: function (e) {
                    console.log(e);
                }
            });
        }
    }
    
    $('#btn-add').on('click',function(e){
        $('input[name="keywords"]').val('');

        $('#modal-video').modal('show');
    })

    $('#modal-video').on('hidden.bs.modal', function () {
        location.reload();
   });

    $('input[name="keywords"]').on('keypress',function(e){
        console.log('onkeyup => ', e.which );
        if(e.which == 13) {
            $('button[name="btn-search"]').trigger('click');
        }

    });

    $('button[name="btn-search"]').on('click',function(e){
        var term = $('input[name="keywords"]').val();
        var response = $('.response-search');
        if( term != '' && term !== null){
            response.html('<center>'
                         +'<p><i class="fa fa-spinner fa-pulse fa-3x fa-fw text-primary"></i></p>'
                          +'<p>Loading....</p>'
                        +'</center>');
            $.ajax({
                url:_base + '/backend/video-search',
                data:{ 
                    _token:$('input[name="_token"]').val(), 
                    category_id:$('input[name="category_id"]').val(),
                    keywords:$('input[name="keywords"]').val() 
                    },
                type:'POST',
                success:function(res){
                    response.html(res);
                    addVideo();
                }
            });
        }
    });

    var addVideo = function(){
        var category_id = $('input[name="category_id"]').val();
        var token = $('input[name="_token"]').val();
        $('.put-video').on('click',function(e){
            var row = $(this).closest('tr');
            var id = $(this).attr('data-id');
            var _this = $(this);
            $.ajax({
                type:'POST',
                data:{
                    _token:token,
                    category_id:category_id,
                    content_id:id
                },
                url: _base + '/backend/video-add',
                success: function(res){
                    if( res.code == 200 )
                    _this.parent().html('<i class="fa fa-check fa-2x text-success"></i>')
                }
            })
        });
    }
    var frm = new frm();
    $('.remove-video').on('click', function (e) {
        e.preventDefault();
        var row = $(this).closest('tr');
        if (confirm('Please confirm remove this video')) {
            var id = $(this).attr('data-id');
            frm.delete(id);
            row.remove();
        }
    });

    $('.btn-delete').on('click', function (e) {
        var ids = [];
        if (!confirm('Please confirm delete this video selected'))
            return false;
        $('.checkboxAll').each(function (index, val) {
            var row = $(this).closest('tr');
            if ($(this).is(':checked')) {
                ids.push($(this).val());
                row.remove();
            }
        });
        frm.delete(ids.join('-'));
    });
}(jQuery));