document.addEventListener("DOMContentLoaded", function() {
    const track = document.querySelector(".carousel-track");
    const players = document.querySelectorAll(".player");
    const dotsContainer = document.querySelector(".carousel-navigation");

    let index = 0;
    const playerWidth = players[0].offsetWidth;

    // Configurações iniciais
    track.style.transform = `translateX(0)`;

    // Criar botões de navegação (bolinhas) dinamicamente
    players.forEach((player, i) => {
        // Criar um botão para cada jogador
        const dot = document.createElement("button");
        dot.classList.add("carousel-dot");
        dot.setAttribute("aria-label", `Navegar para jogador ${i + 1}`);
        dot.setAttribute("data-index", i.toString());
        dotsContainer.appendChild(dot);

        // Evento de clique para o botão de bolinha
        dot.addEventListener("click", () => {
            moveToPlayer(i);
        });
    });

    // Adicionar classe 'active' ao primeiro botão de bolinha
    dotsContainer.children[0].classList.add("active");

    // Função para mover o carrossel para o índice específico
    const moveToPlayer = (newIndex) => {
        index = newIndex;
        const offset = -index * playerWidth;
        track.style.transform = `translateX(${offset}px)`;

        // Atualiza a classe ativa nos botões de navegação
        Array.from(dotsContainer.children).forEach((dot, i) => {
            dot.classList.remove("active");
            if (i === index) {
                dot.classList.add("active");
            }
        });
    };

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

