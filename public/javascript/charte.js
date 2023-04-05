const checkbox = document.getElementById("checkbox");
const nextPage = document.getElementById("nextPage");

checkbox.addEventListener('change', function(event){
    if(event.target.checked) {
        nextPage.classList.remove('disable');
        console.log("checked")
      } else {
        nextPage.classList.add('disable');
        console.log("pas checked")
      }

})

const images = document.querySelectorAll(".imgCharte")
const overlay222 = document.querySelector(".overlay")

let largeurPage = document.documentElement.scrollWidth;
let hauteurPage =  document.documentElement.scrollHeight;

overlay222.style.width = largeurPage + "px";
overlay222.style.height = hauteurPage + "px";

images.forEach(img => {
  img.addEventListener('click', () => {
    console.log("img clickée")
    if (img.classList.contains('imgFull')) {
      img.classList.remove('imgFull');
      img.classList.add('img');
      overlay222.classList.add('dnone');
    } else {
      img.classList.remove('img');
      img.classList.add('imgFull');
      overlay222.classList.remove('dnone');
    }
  });
  overlay222.addEventListener('click', () => {
    img.classList.add('img');
    img.classList.remove('imgFull');
    overlay222.classList.add('dnone');
  })
})

