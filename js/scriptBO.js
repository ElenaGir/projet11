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