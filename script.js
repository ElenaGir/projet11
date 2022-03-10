const btnPlus = document.querySelector('#btnAdd')
const main = document.querySelector('#boxMain')
const test = document.querySelector('#test')


btnPlus.addEventListener('click', function(){
    main.classList.add("hidden");
    main.classList.remove("flex");

    test.classList.add("flex");
    test.classList.remove("hidden");
})