// Récupérer les éléments du DOM
const divUn = document.getElementById('un');
const divDeux = document.getElementById('deux');
const precedentBtn = document.getElementById('précedent');
const suivantBtn = document.getElementById('suivant');
const fieldset = document.getElementById('fieldset');
const recapBtn = document.getElementById('recap'); 
const contenu = document.getElementById('contenu');

// Écouter l'événement du bouton "Suivant" dans le div un
suivantBtn.addEventListener('click', function() {
    divUn.style.display = 'none';
    divDeux.style.display = 'block';
    precedentBtn.style.display = 'block';
    suivantBtn.style.display= 'none';
    recapBtn.style.display = 'block'; // afficher le bouton Récapitulatif dans le div deux
    fieldset.style.display='block';
});

// Écouter l'événement du bouton "Précédent" dans le div deux
precedentBtn.addEventListener('click', function() {
    divUn.style.display = 'block';
    divDeux.style.display = 'none';
    suivantBtn.style.display= 'block';
    precedentBtn.style.display = 'none';
    recapBtn.style.display = 'none'; // Cacher le bouton Récapitulatif dans le div un
    fieldset.style.display='block';
    contenu.style.display='none';
});


// Écouter l'événement du bouton "Récapitulatif"
recapBtn.addEventListener('click', function() {
    divDeux.style.display= 'none';
    recapBtn.style.display = 'none';
    fieldset.style.display='none';

    const inputNom = document.getElementById('nom');
    const inputPrenom = document.getElementById('prenom');
    const inputPrenomEpouse = document.getElementById('prenom_epouse');

    const recapitulatif = `
        <h2>Récapitulatif des données saisies :</h2>
        <h3>Div Un :</h3>
        <p>Nom : ${inputNom.value}</p>
        <p>Prénom : ${inputPrenom.value}</p>
        <h3>Div Deux :</h3>
        <p>Prénom de l'épouse : ${inputPrenomEpouse.value}</p>
    `;

    const contenu = document.getElementById('contenu');
    contenu.innerHTML = recapitulatif;
});











// Fonction pour afficher le div second et masquer le div premier
function afficherDivsecond() {

    var nom = document.getElementById('nom').value;
var prenom = document.getElementById('prenom').value;
var documentass = document.getElementById('documentass').value;
var date_naissance = document.querySelector('#date_naissance').value;
var lieu_naissance = document.getElementById('lieu_naissance').value;
var nationalité = document.getElementById('nationalité').value;
var profession = document.getElementById('profession').value;
var telephone = document.getElementById('telephone').value;
var cin = document.getElementById('cin').value;
var date_del = document.getElementById('date_del').value;
var date_exp = document.getElementById('date_exp').value;
var adresse_ass = document.getElementById('adresse_ass').value; 
var situation_matrimoniale = document.getElementById('situation_matrimoniale').value;
var prenom_epouse = document.getElementById('prenom_epouse').value;
var date_naissance_epouse = document.getElementById('date_naissance_epouse').value;
var lieu_naissance_epouse = document.getElementById('lieu_naissance_epouse').value;
var date_mariage = document.getElementById('date_mariage').value;
var nationalité_conjoint = document.getElementById('nationalité_conjoint').value;
var lieu_mariage = document.getElementById('lieu_mariage').value; 
var date_contrat_mariage = document.getElementById('date_contrat_mariage').value; 
var non_resid_notaire = document.getElementById('non_resid_notaire').value;      
var regime = document.getElementById('regime').value;

var nomD = document.getElementById('nomD').value;
var prenomD = document.getElementById('prenomD').value;
var documentassD = document.getElementById('documentassD').value;
var date_naissanceD = document.querySelector('#date_naissanceD').value;
var lieu_naissanceD = document.getElementById('lieu_naissanceD').value;
var nationalitéD = document.getElementById('nationalitéD').value;
var professionD = document.getElementById('professionD').value;
var telephoneD = document.getElementById('telephoneD').value;
var cinD = document.getElementById('cinD').value;
var date_delD = document.getElementById('date_delD').value;
var date_expD = document.getElementById('date_expD').value;
var adresse_assD = document.getElementById('adresse_assD').value; 
var situation_matrimonialeD = document.getElementById('situation_matrimonialeD').value;
var prenom_epouseD = document.getElementById('prenom_epouseD').value;
var date_naissance_epouseD = document.getElementById('date_naissance_epouseD').value;
var lieu_naissance_epouseD = document.getElementById('lieu_naissance_epouseD').value;
var date_mariageD = document.getElementById('date_mariageD').value;
var nationalité_conjointD = document.getElementById('nationalité_conjointD').value;
var lieu_mariageD = document.getElementById('lieu_mariageD').value; 
var date_contrat_mariageD = document.getElementById('date_contrat_mariageD').value; 
var non_resid_notaireD = document.getElementById('non_resid_notaireD').value;      
var regimeD = document.getElementById('regimeD').value;


    
    var canvas = document.getElementById("signatureCanvas");
    var ctx = canvas.getContext("2d");
    var imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
    var data = imageData.data;
    var isCanvasEmpty = true;


    var canvasD = document.getElementById("signatureCanvasDxm");
    var ctxD = canvasD.getContext("2d");
    var imageDataD = ctxD.getImageData(0, 0, canvasD.width, canvasD.height);
    var dataD = imageDataD.data;
    var isCanvasEmptyD = true;
    
    

    for (var i = 0; i < data.length; i += 4) {
        var alpha = data[i + 3];
      
        if (alpha !== 0) {
            isCanvasEmpty = false;
            break;
          }
        }

        for (var i = 0; i < dataD.length; i += 4) {
            var alphaD = dataD[i + 3];
          
            if (alphaD !== 0) {
                isCanvasEmptyD = false;
                break;
              }
            }        
                
            suivantBtn.style.display='none'
            recapBtn.style.display='block';
           

        if(isCanvasEmpty){
            alert('Veuillez A remplir tous les champs avant de passer à l\'étape suivante.');
            suivantBtn.style.display='block';
            recapBtn.style.display='none';
        } else if (nom.trim() === '' || nationalité.trim() === '' || profession.trim() === '' || cin.trim() === '' || date_del.trim() === '' || date_exp.trim() === '' || adresse_ass.trim()===''|| prenom.trim() === '' || telephone.trim()==='' || documentass.trim() === '' || date_naissance.trim() === '' || lieu_naissance.trim() === '' ) {
            alert('Veuillez B remplir tous les champs avant de passer à l\'étape suivante.');
            suivantBtn.style.display='block';
            recapBtn.style.display='none';
        
        } else if (situation_matrimoniale.trim() === 'Marie') {
            if (prenom_epouse.trim() === ''||  lieu_mariage.trim()==='' ||  date_contrat_mariage.trim()===''  || date_naissance_epouse.trim()==='' || date_mariage.trim()==='' || non_resid_notaire.trim()==='' || lieu_naissance_epouse.trim()==='' || nationalité_conjoint.trim()==='') {
                alert('Veuillez C remplir tous les champs avant de passer à l\'étape suivante.');
                suivantBtn.style.display='block';
                recapBtn.style.display='none';
            }  else if(regime.trim()==='choix_regime'){
                alert('Veuillez D choisir votre regime matrimonial avant de passer à l\'étape suivante.');
                suivantBtn.style.display='block';
                recapBtn.style.display='none';
            } 
          } 
          else   if(type_societe.value.trim()==='Pluripersonelle'){

            document.getElementById('moi').value= prenom;
            document.getElementById('moi').innerHTML=prenom;
            const gerantSelect = document.getElementById('gérant'); 


    const optionElement = document.createElement('option');
    optionElement.value = prenomD;
    optionElement.textContent = prenomD;
    gerantSelect.appendChild(optionElement);

                      if(isCanvasEmptyD){
                    alert('Veuillez E remplir tous les champs avant de passer à l\'étape suivante.');
                    suivantBtn.style.display='block';
                    recapBtn.style.display='none';
                } else if (nomD.trim() === '' || nationalitéD.trim() === '' || professionD.trim() === '' || cinD.trim() === '' || date_delD.trim() === '' || date_expD.trim() === '' || adresse_assD.trim()===''|| prenomD.trim() === '' || telephoneD.trim()==='' || documentassD.trim() === '' || date_naissanceD.trim() === '' || lieu_naissanceD.trim() === '' ) {
                    alert('Veuillez F remplir tous les champs avant de passer à l\'étape suivante.');
                    suivantBtn.style.display='block';
                    recapBtn.style.display='none';
                
                } else if (situation_matrimonialeD.trim() === 'Marie') {
                    if (prenom_epouseD.trim() === ''||  lieu_mariageD.trim()==='' ||  date_contrat_mariageD.trim()===''  || date_naissance_epouseD.trim()==='' || date_mariageD.trim()==='' || non_resid_notaireD.trim()==='' || lieu_naissance_epouseD.trim()==='' || nationalité_conjointD.trim()==='') {
                        alert('Veuillez G remplir tous les champs avant de passer à l\'étape suivante.');
                        suivantBtn.style.display='block';
                        recapBtn.style.display='none';
                    }  else if(regimeD.trim()==='choix_regime'){
                        alert('Veuillez H choisir votre regime matrimonial avant de passer à l\'étape suivante.');
                        suivantBtn.style.display='block';
                        recapBtn.style.display='none';
                    }
                     else {
                        divpremier.style.display = 'none';
                        divsecond.style.display = 'block';
                        precedentBtn.style.display = 'block';
                        Typ_Sos.style.display='none';
                        
                    }
                }
 
    if(ajoutAssocieClique===true){
        var sortir=0;
      for(i=3;i<compteur;i++){
             
        var nomDI = document.getElementById('nomD'+i).value;
var prenomDI = document.getElementById('prenomD'+i).value;
var documentassDI = document.getElementById('documentassD'+i).value;
var date_naissanceDI = document.querySelector('#date_naissanceD'+i).value;
var lieu_naissanceDI = document.getElementById('lieu_naissanceD'+i).value;
var nationalitéDI = document.getElementById('nationalitéD'+i).value;
var professionDI = document.getElementById('professionD'+i).value;
var telephoneDI = document.getElementById('telephoneD'+i).value;
var cinDI = document.getElementById('cinD'+i).value;
var date_delDI = document.getElementById('date_delD'+i).value;
var date_expDI = document.getElementById('date_expD'+i).value;
var adresse_assDI = document.getElementById('adresse_assD'+i).value; 
var situation_matrimonialeDI = document.getElementById('situation_matrimonialeD'+i).value;
var prenom_epouseDI = document.getElementById('prenom_epouseD'+i).value;
var date_naissance_epouseDI = document.getElementById('date_naissance_epouseD'+i).value;
var lieu_naissance_epouseDI = document.getElementById('lieu_naissance_epouseD'+i).value;
var date_mariageDI = document.getElementById('date_mariageD'+i).value;
var nationalité_conjointDI = document.getElementById('nationalité_conjointD'+i).value;
var lieu_mariageDI = document.getElementById('lieu_mariageD'+i).value; 
var date_contrat_mariageDI = document.getElementById('date_contrat_mariageD'+i).value; 
var non_resid_notaireDI = document.getElementById('non_resid_notaireD'+i).value;      
var regimeDI = document.getElementById('regimeD'+i).value;   


var canvasDI = document.getElementById("signatureCanvasDxm"+i);
var ctxDI = canvasDI.getContext("2d");
var imageDataDI = ctxDI.getImageData(0, 0, canvasDI.width, canvasDI.height);
var dataDI = imageDataDI.data;
var isCanvasEmptyDI = true;



const gerantSelect = document.getElementById('gérant');
var prenomDI = document.getElementById('prenomD'+i).value;
const optionElement = document.createElement('option');
optionElement.value = prenomDI;
optionElement.textContent = prenomDI;
const autrePersonneOption = gerantSelect.querySelector('[value="Autre"]');
gerantSelect.insertBefore(optionElement, autrePersonneOption);




for (var j = 0; j < dataDI.length; j += 4) {
    var alpha = dataDI[j + 3];
    if (alpha !== 0) {
        isCanvasEmptyDI = false;
        break;
      }
    }
                if(isCanvasEmptyDI){
                    alert('Veuillez CA Saisir toutes les champs avant de passer à l\'étape suivante.');
                    suivantBtn.style.display='block';
                    recapBtn.style.display='none';
                    break;  
                }
          else if(nomDI.trim()==='' || prenomDI.trim()==='' || documentassDI.trim()==='' || date_naissanceDI.trim()==='' || lieu_naissanceDI.trim()==='' || nationalitéDI.trim()==='' || professionDI.trim()==='' || telephoneDI.trim()==='' || cinDI.trim()===''  || date_delDI.trim()==='' || date_expDI.trim()==='' || adresse_assDI.trim()==='' ){
                 alert('Veuillez O Saisir toutes les champs avant de passer à l\'étape suivante.');
                        suivantBtn.style.display='block';
                        recapBtn.style.display='none';
                        break;
                     }
                     else if(situation_matrimonialeDI.value==='Marié' && (prenom_epouseDI.trim()==='' || date_naissance_epouseDI.trim()==='' || lieu_naissance_epouseDI.trim()==='' || date_mariageDI.trim()==='' || nationalité_conjointDI.trim()==='' || lieu_mariageDI.trim()==='' || date_contrat_mariageDI.trim()==='' || non_resid_notaireDI.trim()==='' || regimeDI.trim()==='' )){
                      alert('Veuillez Saisir les informations du conjoint avant de passer à l\'étape suivante.');
                      suivantBtn.style.display='block';
                      recapBtn.style.display='none';
                      break;
                     } 
                     sortir=1;  
                }   
                if(sortir===1){

                   
                    
                    divpremier.style.display = 'none';
                    divsecond.style.display = 'block';
                    precedentBtn.style.display = 'block';
                    Typ_Sos.style.display='none';
                }
                
      }else {
        divpremier.style.display = 'none';
        divsecond.style.display = 'block';
        precedentBtn.style.display = 'block';
        Typ_Sos.style.display='none';
       
    }
 } else {

    var prenomD = document.getElementById('prenomD').value;
        supprimerOptionGerantByValue(prenomD);
        for (i = 3; i < compteur; i++) {  
            var prenomDI = document.getElementById('prenomD'+i).value;
            supprimerOptionGerantByValue(prenomDI);
        }
        document.getElementById('moi').value = 'Moi';
        document.getElementById('moi').innerHTML = 'Moi meme';
        divpremier.style.display = 'none';
        divsecond.style.display = 'block';
        precedentBtn.style.display = 'block';
        Typ_Sos.style.display = 'none';


   
}

}