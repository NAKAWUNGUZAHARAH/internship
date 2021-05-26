jQuery(function ($) {

    $('#submit').on('click', '', function (event) {
        $.ajax({
            type: "post",
            url: "service.php",
            data: $('#add-form').serialize(),
            success: function (response) {
                console.log(response);
                $('#msg').html(response);
                $('#name').val("");
                $('#type').val("");
                $('#amount').val("");
                $('#duration').val("");
                $('#description').val("");

            },
            error: function (error) {
                console.log(error.toString());
            }
        });
        event.preventDefault();
    });
    

});
