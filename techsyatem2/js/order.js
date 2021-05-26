jQuery(function ($) {

    $('#submit').on('click', '', function (event) {
        $.ajax({
            type: "post",
            url: "order.php",
            data: $('#add-form').serialize(),
            success: function (response) {
                console.log(response);
                $('#msg').html(response);
                $('#name').val("");
                $('#service').val("");
                $('#status').val("");
                $('#orders').val("");
                $('#amount').val("");
            },
            error: function (error) {
                console.log(error.toString());
            }
        });
        event.preventDefault();
    });
    

});
