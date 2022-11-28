let btnProjet = document.querySelector('.btn-projets__enfant');
let siteMain = document.querySelector('.site__main');
let listeProjets = document.querySelector('.listeProfs');
let isPressed = false;

(function() {
    console.log("catégorie: projets");
    listeProjets.classList.add('listeProjets');
    btnProjet.addEventListener('click', function() {
        listeProjets.classList.toggle('listeProjets');
    })

}())