// Ce fichier permet d'ajouter des divs dans chaque élément du menu principal
let d = document;

let menuPrincipal = d.getElementById("menu-principal");
let liMenuPrincipal = menuPrincipal.querySelectorAll("li");
let menuBurger = d.getElementById('burger');
let btnMenuBurger = d.querySelector('#chk-burger');
let menuOuvert = false;

let boiteTransparent = d.querySelector('.boiteTransparent');
let page = d.querySelector('html');
let liSidebarFooter = d.querySelectorAll(".wp-block-social-link-anchor");
let searchBar = d.querySelector(".recherche");

for (let i = 0; i < liMenuPrincipal.length; i++) {
    liMenuPrincipal[i].innerHTML += '<div class="menu-item__ligne"></div>';
}

for (let i = 0; i < liSidebarFooter.length; i++) {
    liSidebarFooter[i].setAttribute('target', '_blank');
}
menuPrincipal.appendChild(searchBar);

(function() {
    menuBurger.addEventListener('click', function() {
        afficherMenu();
    })
    boiteTransparent.addEventListener('click', function() {
        afficherMenu();
    })
}())

/*******************************************************************************/
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