$(document).on('scroll', '', function (event) {
    let y = $(this).scrollTop();
    if (y > 10) {
        $("#nav").css("background-color", "black");
    } else {
        $("#nav").css("background-color", "white");
    }
});