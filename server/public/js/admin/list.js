console.log($('.btn-delete').attr('url'));
$(document).ready(function () {
    $('.btn-delete').on('click', function () {
        $('.link-delete').attr("href", $(this).attr('url'));
    });
});