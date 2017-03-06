$(document).ready(function () {
    $('.slider-list-single img').click(function () {
        var image = $(this).attr('src');
        var description = $(this).parent().data('description');
        var main_image = $('.slider-main-image img').attr('src');
        var main_description = $('.slider-main-image span').text();
        $('.slider-main-image img').attr('src', image);
        $('.slider-main-image span').html(description);
        $(this).attr('src', main_image);
        $(this).parent().data('description', main_description);
    })
})