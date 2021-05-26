jQuery(function ($) {

    $('#submit').on('click', '', function (event) {
        $.ajax({
            type: "post",
            url: "customer.php",
            data: $('#add-form').serialize(),
            success: function (response) {
                console.log(response);
                $('#msg').html(response);
                $('#firstname').val("");
                $('#lastname').val("");
                $('#gender').val("");
                $('#dob').val("");
                $('#address').val("");
                $('#phone').val("");
            },
            error: function (error) {
                console.log(error.toString());
            }
        });
        event.preventDefault();
    });
    

});
