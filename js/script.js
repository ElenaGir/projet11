// barre  de nav
const bourger =  document.getElementById('nav-toggle');
const content = document.getElementById("nav-content");
bourger.addEventListener('click', function(){
    content.classList.toggle("hidden");
    content.style.display = "flex";
     
})
content.addEventListener('click', function(){
    if(document.querySelector("body").clientWidth < "1023" ){
        content.style.display = "none";
    }
    

})

//opacité barre de navigation
const nav = document.querySelector('#navbar');
window.addEventListener('scroll', () => {
    if(window.scrollY >= 150){
        nav.classList.add('scroll');
    }
    else{
        nav.classList.remove('scroll');
    }    
});

// animation carousel
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

// animation tasse-soucoupe
window.addEventListener('scroll', () =>{
    
    if((window.scrollY > 1750)){

        var tl = gsap.timeline({repeat: 1, repeatDelay: 1
        });

        tl
          .addLabel("soucoupeAndtasse")
          if(document.querySelector("body").clientWidth <= "1023" ){
            gsap.to("#soucoupe", {duration: 1, x: 100 }, "soucoupeAndtasse") 
            gsap.to("#tasse", {duration: 1, x: -110, rotation: 720}, "soucoupeAndtasse");
          }
          
          if(document.querySelector("body").clientWidth > "1023" ){
            gsap.to("#soucoupe", {duration: 1, x: 150 }, "soucoupeAndtasse"); 
            gsap.to("#tasse", {duration: 1, x: -160, rotation: 720}, "soucoupeAndtasse"); 
        
          }   
    }
})



