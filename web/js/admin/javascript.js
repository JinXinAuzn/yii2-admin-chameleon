$(document).ready(function () {
    $('.table-rowspan thead .filters td:last').remove();
    $('#main-menu-navigation .has-sub').removeClass('active');
});
window.setTimeout(function () {
    $('.alert').alert('close');
}, 2000);
$(document).on('ready pjax:end', function (event) {
    $('.table-rowspan thead .filters td:last').remove();
});