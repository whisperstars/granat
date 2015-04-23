$(function () {
    $('.list-pages-menu a').click(function (e) {
        var id = $(this).attr('href');

        $('.pageInList').addClass('hidden');
        $(id).removeClass('hidden');

        $('html, body').animate({
            scrollTop: $('.list-pages-menu').offset().top - 5
        });

        e.preventDefault();
    });
});