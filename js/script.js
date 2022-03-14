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