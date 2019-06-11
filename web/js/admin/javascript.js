$(document).ready(function () {
    $('#main-menu-navigation .has-sub').removeClass('active');
    $('section').find('.card-title').text($('title').text());
});
window.setTimeout(function () {
    $('.alert').alert('close');
}, 2000);
$(document).on('ready pjax:end', function (event) {
    $('.table-rowspan thead .filters td:last').remove();
});