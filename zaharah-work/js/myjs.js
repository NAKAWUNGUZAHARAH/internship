jQuery(function ($) {

    $('#submit').on('click', '', function (event) {
        $.ajax({
            type: "post",
            url: "connection.php",
            data: $('#signup-form').serialize(),
            success: function (response) {
                console.log(response);
                $('#msg').html(response);
                $('#first_name').val("");
                $('#last_name').val("");
                $('#country').val("");
                $('#message').val("");
                $('#email_address').val("");
            },
            error: function (error) {
                console.log(error.toString());
            }
        });
        event.preventDefault();
    });
   

});


