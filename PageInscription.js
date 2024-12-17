const statutEleve = document.getElementById('statutEleve');
const statutParent = document.getElementById('statutParent');
const eleveContainer = document.getElementById('eleveContainer');

// Fonction pour afficher ou masquer le conteneur élève selon le statut
function toggleEleveContainer() {
  if (statutParent.checked) {
    eleveContainer.classList.add('show');
  } else {
    eleveContainer.classList.remove('show');
  }
}

statutEleve.addEventListener('change', toggleEleveContainer);
statutParent.addEventListener('change', toggleEleveContainer);

// Initialiser l'affichage correctement au chargement
toggleEleveContainer();
