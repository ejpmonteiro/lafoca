$(function () {
    //abre fecha menu 
    $('.nav-toggle, .nav-close').click(function (e) {
        e.preventDefault();
        $('.nav').toggleClass('active');
    });
    //fixar header
    $(window).scroll(function(){
       if($(this).scrollTop()>100){
           $('.header').addClass('fixed');
           $('.dropdown-menu').addClass('page-index2')
       }else{
           $('.header').removeClass('fixed',);
           $('.dropdown-menu').removeClass('page-index2')
       }
    });
});

// Redirecionar página
function rota(page) {
    location.href = page;
}