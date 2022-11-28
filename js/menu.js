// Ce fichier permet d'ajouter des divs dans chaque élément du menu principal
let menuPrincipal = document.getElementById("menu-principal");
let liMenuPrincipal = menuPrincipal.querySelectorAll("li");
let menuBurger = document.getElementById('burger');
let boiteTransparent = document.querySelector('.boiteTransparent');
let page = document.querySelector('html');
let btnMenuBurger = document.querySelector('#chk-burger');
let menuOuvert = false;

for (let i = 0; i < liMenuPrincipal.length; i++) {
    liMenuPrincipal[i].innerHTML += '<div class="menu-item__ligne"></div>';
}

(function() {

    menuBurger.addEventListener('click', function() {
        afficherMenu();
    })
    boiteTransparent.addEventListener('click', function() {
        afficherMenu();
    })

}())

function afficherMenu() {
    menuOuvert = !menuOuvert;
    // console.log("menu burger click");
    page.classList.toggle('bloquer');
    if (menuOuvert) {
        page.classList.add('bloquer');
        boiteTransparent.classList.add('ouvrir');
    } else {
        page.classList.remove('bloquer');
        boiteTransparent.classList.remove('ouvrir');
    }
}