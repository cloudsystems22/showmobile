$('.nav-scroll').click(function(e) {
    e.preventDefault();
    let id = $(this).attr('href'), //caputra o valor do atributo href;
        targetOffset = $(id).offset().top; //mede a distancia em relação ao topo;
    console.log(id);
    
    $('html, body').animate({
        scrollTop: targetOffset - 70 //Aplico animação jquery de scroll suave - pixels do cabeçalho;
    }, 1200, 'swing'); // velocidade
});