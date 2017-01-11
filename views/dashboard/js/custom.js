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

    var opt = {
        autoOpen: false,
        modal: true,
        show: {
            effect: "slide",
            duration: 400
        },
        hide: {
            effect: "slide",
            duration: 200
        }
    };

    $('.redact').on('click', function (o) {
        var form = $('#edit-form'),
            id = $(this).attr('data-id');

        $.ajax({
            url: 'xhrGetNoteById',
            dataType: 'json',
            type: 'post',
            data: {'id' : id},
            success: function (data) {
                var item = data;
                form.find('#id').val(id);
                form.find('#name').val(item[0].name);
                form.find('#email').val(item[0].email);
                form.find('#site').val(item[0].site);
                form.find('#text').val(item[0].text);
            },
            error: function () {
                console.log('false');
            }
        });

        form.dialog(opt).dialog('open');
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
