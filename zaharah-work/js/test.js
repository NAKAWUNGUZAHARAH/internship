jQuery(function ($) {

    $('#submit').on('click', '', function (event) {
        $.ajax({
            type: "post",
            url: "test.php",
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
    // $(window).on('scroll', function () {
    //     const scroll = $(window).scrollTop();
    //     if (scroll > 50) {
    //         $("nav").css("background", "blue");
    //     } else {
    //         $(".nav").css("background", "red");
    //     }
    // });


    $(document).on('scroll', '', function (event) {
        let y = $(this).scrollTop();
        if (y > 50) {
            $("#nav").css("background-color", "black");
        } else {
            $("#nav").css("background-color", "green");
        }
    });

    // $(document).on('scroll', '', function (event) {
    //     let y = $(this).scrollTop();
    //     if (y > 100) {
    //         $('.top').fadeIn('slow');
    //     } else {
    //         $('.top').fadeOut('slow');
    //     }
    // });

});


