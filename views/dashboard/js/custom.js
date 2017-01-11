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
        $.post( url, data, 'json');
    });

    $('.delete').on('click', function (o) {
        var id = $(this).attr('data-id'),
            item = $(this);
        $.ajax({
           url: 'xhrDeleteListing',
            dataType: 'json',
            type: 'post',
            data: {'id' : id},
            success: function(data, textStatus, jQxh) {
               console.log('true');
            },
            error: function () {
                console.log('false');
            }
        });
        location.reload();
    });
});
