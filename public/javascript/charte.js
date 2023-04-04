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