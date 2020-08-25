$('.nav-scroll').click(function(e) {
    e.preventDefault();
    let id = $(this).attr('href'), //caputra o valor do atributo href;
        targetOffset = $(id).offset().top; //mede a distancia em relação ao topo;
    
    $('html, body').animate({
        scrollTop: targetOffset - 70 //Aplico animação jquery de scroll suave - pixels do cabeçalho;
    }, 1200, 'swing'); // velocidade
});
$('.nav-scroll-side').click(function(e) {
    e.preventDefault();
    let id = $(this).attr('href'), //caputra o valor do atributo href;
        targetOffset = $(id).offset().top; //mede a distancia em relação ao topo;
        sideBar.classList.toggle('bar-visivel');
    
    $('html, body').animate({
        scrollTop: targetOffset - 70 //Aplico animação jquery de scroll suave - pixels do cabeçalho;
    }, 1200, 'swing'); // velocidade
});

let btnHanburger = document.getElementById('btnHanburger');
let navRedes = document.getElementById('navRedes');
let navMenu = document.getElementById('navMenu');
let navBar = document.getElementById('navbar');

let sideBar = document.getElementById('sideBar');

btnHanburger.addEventListener('click', function() {
    sideBar.classList.toggle('bar-visivel');
    // navMenu.classList.toggle('nav-mobile-visivel');
    // navRedes.classList.toggle('nav-mobile-visivel');
    // navBar.classList.toggle('expand');
})

function sideClose(){
    sideBar.classList.toggle('bar-visivel');
}