const h1 = document.querySelector(".entetePage h1")
const h2 = document.querySelector(".entetePage h2")
const alerte = document.querySelectorAll(".alert")
const alerteArray = Array.from(alerte)

gsap.from(h1, {x:-80, duration :1.25, opacity:0})
gsap.from(h2, {y:10,duration :0.5, opacity:0, delay:0.25})

window.onload = function() {
    const alerte = document.querySelectorAll(".alert");
    const alerteArray = Array.from(alerte);
    gsap.to(alerteArray, { y: 10, duration: 0.5, opacity: 0, delay: 3.25, height: 0 });
  };
// gsap.to(alerteArray, {y:10,duration :0.5, opacity:0, delay:3.25, height:0})