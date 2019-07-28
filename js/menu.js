/*
$('#menu_wrap ul li').click(function () {
    let href = $(this).attr('href');
    location.href = href;
});
*/
$(document).on('click', '#menu_wrap li', function() {
    let href = $(this).attr("href");
    location.href = href;
});