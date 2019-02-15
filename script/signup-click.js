$(document).ready(function($) {
    $('#signup-form')
        .submit(function () {
             var str1 = $(this).serialize();
                $.ajax({
                    type: "POST",
                    url: 'function/saveUser.php',
                    data: str1,

                    success: function (data) {
                       // alert(data);
                        $('#success_message').fadeIn().html(data);
                    },
                });
             return false;
        })
        .bootstrapValidator();
    
});