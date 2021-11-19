// Exibir PDF
function exibirPdf(file) {
    $('.article').addClass('viewpdf');
    var viewer = $('.viewpdf');
    PDFObject.embed(file, viewer);
}

//abre fecha menu 
$('.nav-toggle, .nav-close').click(function (e) {
    e.preventDefault();
    $('.nav').toggleClass('active');
});