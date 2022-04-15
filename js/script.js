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
window.addEventListener('scroll', () =>{
    if(window.scrollY > 1850){
        var tl = gsap.timeline({repeat: 0, repeatDelay: 1});

        tl
          .addLabel("soucoupeAndtasse")
          //start both of these animations at the same time, at the "greyAndPink" label.
          .to("#soucoupe", {duration: 1, x: 100 }, "soucoupeAndtasse") 
          .to("#tasse", {duration: 1, x: -110, rotation: 720}, "soucoupeAndtasse");
        
          if(document.querySelector("body").clientWidth > "1023" ){
            gsap.to("#soucoupe", {duration: 1, x: 150 }, "soucoupeAndtasse"); 
            gsap.to("#tasse", {duration: 1, x: -160, rotation: 720}, "soucoupeAndtasse"); 
        
          }   
    }

} )



