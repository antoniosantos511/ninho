document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("img01");
    var fechar = document.getElementsByClassName("fechar")[0];

    var galleryItems = document.getElementsByClassName("fotoAbrir");
    for (var i = 0; i < galleryItems.length; i++) {
        galleryItems[i].addEventListener('click', function() {
            modal.style.display = "block"; /* abre o modal */
            modalImg.src = this.src; /* mostra a imagem do modal */
            setTimeout(function() {
                modal.classList.add("show"); /* animacao */
            }, 10); /* atraso da animacao */
        });
    }

    fechar.addEventListener('click', function() {
        modal.classList.remove("show"); 
        setTimeout(function() {
            modal.style.display = "none"; 
        }, 500); 
    });

    // Fechar o modal ao clicar fora da imagem
    window.addEventListener('click', function(event) {
        if (event.target == modal) {
            modal.classList.remove("show"); 
            setTimeout(function() {
                modal.style.display = "none"; 
            }, 500); 
        }
    });
});





let btnMenu = document.getElementById("btn-menu");
let menu = document.getElementById("menu-mobile");
let overlay = document.getElementById("overlay-menu");

btnMenu.addEventListener("click", () => {
  menu.classList.add("abrir-menu");
});

menu.addEventListener("click", () => {
  menu.classList.remove("abrir-menu");
});

overlay.addEventListener("click", () => {
  menu.classList.remove("abrir-menu");
});



