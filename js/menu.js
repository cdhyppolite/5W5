// Ce fichier permet d'ajouter des divs dans chaque élément du menu principal
let menuPrincipal = document.getElementById("menu-principal");
let liMenuPrincipal = menuPrincipal.querySelectorAll("li");
let menuBurger = document.getElementById('burger');
let boiteTransparent = document.querySelector('.boiteTransparent');

// console.log(liMenuPrincipal.length);

for (let i = 0; i < liMenuPrincipal.length; i++) {
    liMenuPrincipal[i].innerHTML += '<div class="menu-item__ligne"></div>';
}

(function() {

    menuBurger.addEventListener('click', function() {
        console.log("menu burger click")
        boiteTransparent.classList.toggle('ouvrir');
    })

}())