console.log("MENU.JS");

let menuPrincipal = document.getElementById("menu-principal");
let liMenuPrincipal = menuPrincipal.querySelectorAll("li");

// console.log(liMenuPrincipal.length);

for (let i = 0; i < liMenuPrincipal.length; i++) {
    liMenuPrincipal[i].innerHTML += '<div class="colone"></div>';
}