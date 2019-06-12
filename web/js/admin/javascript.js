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

/*登出*/
$('#nav-admin').bind('click',function (event) {
    let open=$('#nav-admin').find('.dropdown-user');
    if(open.hasClass('show')){
        open.removeClass('show');
    }else {
        open.addClass('show');
    }
    event.stopPropagation()
});
$(document).click(function (event) {
    let open=$('#nav-admin').find('.dropdown-user');
    open.removeClass('show');
    event.stopPropagation()
});