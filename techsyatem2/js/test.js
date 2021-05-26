jQuery(function ($) {

    $('#submit').on('click', '', function (event) {
        $.ajax({
            type: "post",
            url: "register.php",
            data: $('#add-form').serialize(),
            success: function (response) {
                console.log(response);
                $('#msg').html(response);
                $('#firstname').val("");
                $('#lastname').val("");
                $('#username').val("");
                $('#passwrod').val("");
                $('#gender').val("");
                $('#role').val("");
            },
            error: function (error) {
                console.log(error.toString());
            }
        });
        event.preventDefault();
    });
    

});


