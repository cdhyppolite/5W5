let btnProjet = document.querySelector('.btn-projets__enfant');
let siteMain = document.querySelector('.site__main');
let listeProjets = document.querySelector('.listeProfs');
let isPressed = false;

(function() {
    listeProjets.classList.add('listeProjets');
    btnProjet.addEventListener('click', function() {

        listeProjets.classList.toggle('listeProjets');
        isPressed = !isPressed;
        btnProjet.innerHTML = (isPressed) ? "Affichage en carousel" : "Affichage en grille";
    })

}())