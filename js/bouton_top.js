// On cible tous les éléments ayant l'id "myBtn"
let mybutton = document.getElementById("boutonScrollTop");  

// On ajoute une fonction onscroll à la fenêtre pour surveiller les événements de défilement 
// de la page et on appelle la fonction "scrollFunction"
window.onscroll = function() {scrollFunction()};

// Quand l'utilisateur scroll de 20px vers le bas le bouton s'affiche 
// avec le "display: block" sinon il reste invisible avec le "display: none"
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// Quand l'utilisateur clique sur le bouton le scroll s'active pour revenir tout en haut de la page
function topFunction() {
  document.body.scrollTop = 0; // Pour safari
  document.documentElement.scrollTop = 0; // Pour Chrome, Firefox, IE et Opera
}