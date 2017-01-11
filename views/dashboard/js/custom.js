$(function() {
    $("#insert-form").validate({
        rules: {
            name: "required",
            text: "required",
            email: {
                required: true,
                email: true
            }
        }
    });
    $("#insert-form").submit(function() {
        var url = $(this).attr('action');
        var data = $(this).serialize();
        $.post( url, data, function (o) {
           location.reload();
        });
    });

    $('.redact').on('click', function () {
        var id = $(this).attr('data-id'),
            item = $(this);
        console.log('redact ' + id);
    });

    $('.delete').on('click', function () {
        var id = $(this).attr('data-id'),
            item = $(this);
        $.post('dashboard/xhrDeleteListing', {'id': id})
        .done(function (response) {
            console.log(response);
        });
        location.reload();
        return false;
    });

   /* $.get('dashboard/xhrGetListings', function(o) {
        for(var i = 0; i < o.length; i++) {
            // $('#listInserts').append('<div>' + o[i].text + '</div>');
            $("#listInserts").append('<div class="col-md-6 col-md-offset-3 list-group-item">' + o[i].text + '<a href="#" class="del" rel="'+ o[i].id +'">X</a></div>');
        }
        $('.del').on( 'click', function() {
            delItem = $(this);
            var id = $(this).attr('rel');
            $.post('dashboard/xhrDeleteListing', {'id': id}, function(o) {
                $("#listInserts").append('<div>' + o.text + '<a href="#" class="del" rel="'+ o.id +'">X</a></div>');
                delItem.parent().remove();
            }, 'json');
            location.reload();
            return false;
        });
    }, 'json');

    $('#randomInsert').submit(function() {
        var url = $(this).attr('action');
        var data = $(this).serialize();
        $.post(url, data, function(o) {
            $("input[type='text']").val('');
            location.reload();
        });
        return false;
    })*/
});
