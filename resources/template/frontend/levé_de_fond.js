
var form = document.getElementById("form");

// Ajouter un écouteur d'événement à la soumission du formulaire
form.addEventListener('submit', function(event) {
    // Récupérer les valeurs des champs
    var description = document.getElementById("description").value;
    var etat_avancement = document.getElementById("etat_avancemnet").value;
    var besoin_financement = document.getElementById("besoin_financement").value;
    var modalite_remboursement = document.getElementById("modalité_remboursement").value;
    var garanties_disponibles = document.getElementById("garanti_dispo").value;
    
      // Vérifier si les champs obligatoires ne sont pas vides
      if (description.trim() === '' || etat_avancement.trim() === '' || besoin_financement.trim() === '' || modalite_remboursement.trim() === '' || garanties_disponibles.trim() === '') {
       
        event.preventDefault(); // Annuler la soumission du formulaire
        alert("Veuillez remplir tous les champs obligatoires.");

      }
});
