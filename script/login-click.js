$(document).ready(function($) {
    $('#login-form')
        .submit(function () {
            var str2 = $(this).serialize();
            $.ajax({
                type: "POST",
                url: 'function/loginUser.php',
                data: str2,

                success: function (data) {
                    $('#success_message').fadeIn().html(data);
                   // $('#form-for-login').style.display = 'none';
                },
            });
            return false;
        })
        .bootstrapValidator();

});