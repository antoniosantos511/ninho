let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    let slides = document.querySelectorAll('.slides img');
    
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    
    for (let slide of slides) {
        slide.style.display = 'none';
    }
    
    slides[slideIndex - 1].style.display = 'block';
}



let btnMenu = document.getElementById("btn-menu");
let menu = document.getElementById("menu-mobile");
let overlay = document.getElementById("overlay-menu");

btnMenu.addEventListener("click", () => {
    menu.classList.toggle("abrir-menu");
    overlay.style.display = "block"; // Mostra o overlay ao abrir o menu
});

overlay.addEventListener("click", () => {
    menu.classList.remove("abrir-menu");
    overlay.style.display = "none"; // Oculta o overlay ao fechar o menu
});







window.addEventListener("scroll", function () {
  var botao = document.querySelector("#botao");
  botao.classList.toggle("btnrolagem", window.scrollY > 0);
});
