// Récupérer le formulaire
var form = document.querySelector('form');

// Ajouter un écouteur d'événement à la soumission du formulaire
form.addEventListener('submit', function(event) {
    // Récupérer les valeurs des champs
    var identifiant = document.getElementById('identifiant').value;
    var password = document.getElementById('password').value;
    var cpassword = document.getElementById('cpassword').value;
    var email = document.querySelector('input[type="email"]').value;
    var telephone = document.getElementById('telephone').value;


    
    let regExEmail= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ ;

    // Vérifier si les champs sont vides
    if (identifiant.trim() === '' || cpassword.trim()===''|| password.trim() === '' || email.trim() === '' || telephone.trim() === '') {
        event.preventDefault(); // Annuler la soumission du formulaire

        // Afficher un message d'erreur
        alert('Veuillez remplir tous les champs');
    } else if (password.length<8){
        
        event.preventDefault();
        alert('le mot de passe doit contenir au minimum 8 caratéres');
    }else if(cpassword.length!==password.length){
        event.preventDefault();
        alert('Veillez bien confirmer votre mot de pass');
    }else if(cpassword.trim()!==password.trim()){
        event.preventDefault();
        alert('Veillez bien confirmer votre mot de pass');
    } else
    if(regExEmail.test(email)==false){
        event.preventDefault();
        alert('email invalide');
      
    }else if (Number(telephone.length!==9)){
        
        event.preventDefault();
        alert('le numéro de telephone est invalide');
    }
});
