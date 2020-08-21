document.addEventListener('DOMContentLoaded', function () {   
    let leftSlide = document.getElementById('leftSlide');
    let rightSlide = document.getElementById('rightSlide');
    leftSlide.addEventListener('click', function(){
        document.getElementById('sessaoArtistas').scrollLeft -= 330;
    });
    rightSlide.addEventListener('click', function(){
        document.getElementById('sessaoArtistas').scrollLeft += 330;
    });

    let leftSlidePlan = document.getElementById('leftSlidePlan');
    let rightSlidePlan = document.getElementById('rightSlidePlan');

    leftSlidePlan.addEventListener('click', function(){
        document.getElementById('listaPlano').scrollLeft -= 330;
    });
    rightSlidePlan.addEventListener('click', function(){
        document.getElementById('listaPlano').scrollLeft += 330;
    });
}, false);