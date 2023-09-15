// Récupérer le formulaire
var form = document.getElementById('form');

// Ajouter un écouteur d'événement à la soumission du formulaire
form.addEventListener('submit', function(event) {
    // Récupérer les valeurs des champs
    var identifiant = document.getElementById('identifiant').value;
    var password = document.getElementById('password').value;

    
    
    // Vérifier si les champs sont vides
    if (identifiant.trim() === '' || password.trim() === '') {
        event.preventDefault(); // Annuler la soumission du formulaire

        // Afficher un message d'erreur
        alert('Veuillez remplir tous les champs');
    }else if (password.length<8){
        
        event.preventDefault();
        alert('le mot de passe doit contenir au minimum 8 caratéres');
    }
});
