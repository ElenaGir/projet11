/* Switch display none/flex */
const btnPlus = document.querySelector('#btnAdd');
const main = document.querySelector('#boxMain');
const test = document.querySelector('#test');

btnPlus.addEventListener('click', function(){
    main.classList.add("hidden");
    main.classList.remove("flex");

    test.classList.add("flex");
    test.classList.remove("hidden");
})

/* Preview de l'input file */
const inputFile = document.querySelector("#fileAdd");
const preview = document.querySelector("#preview");

inputFile.addEventListener('change', function(){
    while(preview.firstChild) {
      preview.removeChild(preview.firstChild);
    }
    let curFiles = inputFile.files;
    let image = document.createElement('img');
    image.src = window.URL.createObjectURL(curFiles[0]);
    image.classList.add('rounded-full','w-24','h-24','border-2','border-white','bg-white');
    preview.appendChild(image);
})

/* AXAJ */
const form = document.querySelector("#addBox");

form.addEventListener('submit', function(e){
  e.preventDefault()
  let formData = new FormData(form)
  let url = './php/addBO.php';
  fetch(url,{
      method: 'POST',
      body: formData
  })
  .then((response) => {
      return response.json()
  })
  .then((data) => {
      console.log(data);
      /* return form.reset(); */
  })
})