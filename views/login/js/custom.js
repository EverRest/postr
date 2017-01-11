$(function (){
    $("#login-form").validate({
        rules: {
            login: {
              required: true,
              minlength: 4

            },
            pwd: {
              required: true,
              minlength: 4
            }
        }
    });
});
