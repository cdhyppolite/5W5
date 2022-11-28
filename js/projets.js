let btnProjet = document.querySelector('.btn-projets__enfant');
let siteMain = document.querySelector('.site__main');
let listeProjets = document.querySelector('.listeProfs');
let isPressed = false;

(function() {
    console.log("catégorie: projets");
    listeProjets.classList.add('listeProjets');
    btnProjet.addEventListener('click', function() {
        // changerHeight();
        listeProjets.classList.toggle('listeProjets');
    })

}())

function changerHeight() {
    isPressed = !isPressed;
    if (!isPressed) {
        siteMain.style.height = "unset";
    } else {
        if (window.innerWidth <= 1120) {
            siteMain.style.height = "300vh";
            return;
        }
        if (window.innerWidth <= 1670) {
            siteMain.style.height = "170vh";
            return;
        }
        if (window.innerWidth >= 1671) {
            siteMain.style.height = "155vh";
            return;
        }
    }

}