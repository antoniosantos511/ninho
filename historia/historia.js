
document.addEventListener("DOMContentLoaded", function() {
    const audios = document.querySelectorAll("audio");

    /*recurso para que o player toque a música*/
    audios.forEach(audio => {
        audio.addEventListener("play", function() {
            audios.forEach(otherAudio => {
                
                /*recurso para que um player pause quando outro for iniciado*/
                if (otherAudio !== audio && !otherAudio.paused) {
                    otherAudio.pause();
                }
            });
        });
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





window.addEventListener("scroll", function () {
  var botao = document.querySelector("#botao");
  botao.classList.toggle("btnrolagem", window.scrollY > 0);
});