document.getElementById('nav-toggle').onclick = function(){
    
    document.getElementById("nav-content").classList.toggle("hidden");
}
const nav = document.querySelector('#navbar');

window.addEventListener('scroll', () => {
    if(window.scrollY > 150){
        nav.classList.add('scroll');

    }
    else{
        nav.classList.remove('scroll');
    }
    
});
$(document).ready(function(){
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:2000,
        animateOut: 'fadeOut',
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            640:{
                items:2
            },
            1024:{
                items:3
            }
        }
    });
});
