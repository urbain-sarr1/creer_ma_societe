

  function mettreChiffre(chiffre) {
    var correspondance = {
      3: '3',
      4: '4',
      5: '5',
      6: '6',
      7: '7',
      8: '8',
      9: '9',
      10: '10',
      // Ajoutez les autres chiffres et leurs correspondances ici
    };
  
    if (correspondance[chiffre]) {
      return correspondance[chiffre];
    } else {
      return chiffre;
    }
  }
  
 

// Récupérer l'élément select
var selectSituationMatrimoniale = document.getElementById('situation_matrimoniale');
// Récupérer la div pour le conjoint marié
var divEpouseFields = document.getElementById('epouse_fields');

// Ajouter un écouteur d'événement au changement de valeur du select
selectSituationMatrimoniale.addEventListener('change', function() {
    // Vérifier si l'option sélectionnée est "Marié"
    if (selectSituationMatrimoniale.value === 'Marie') {
        // Afficher la div pour le conjoint marié
        divEpouseFields.style.display = 'block';
    } else {
        // Masquer la div pour le conjoint marié
        divEpouseFields.style.display = 'none';
    }
});

var selectSituationMatrimonialeD = document.getElementById('situation_matrimonialeD');
var divEpouseFieldsD = document.getElementById('epouse_fieldsD');

selectSituationMatrimonialeD.addEventListener('change', function() {
    // Vérifier si l'option sélectionnée est "Marié"
    if (selectSituationMatrimonialeD.value === 'Marie') {
        // Afficher la div pour le conjoint marié
        divEpouseFieldsD.style.display = 'block';
    } else {
        // Masquer la div pour le conjoint marié
        divEpouseFieldsD.style.display = 'none';
    }
});

// Récupérer l'élément select
var selectgérant = document.getElementById('gérant');
// Récupérer la div pour l'autre gérant
var divautregérant = document.getElementById('autre_gérant');

// Ajouter un écouteur d'événement au changement de valeur du select
selectgérant.addEventListener('change', function() {
    // Vérifier si l'option sélectionnée est "autre gérant"
    if (selectgérant.value === 'Autre') {
        divautregérant.style.display = 'block';
    } else {
        divautregérant.style.display = 'none';
    }
});



const divpremier = document.getElementById('premier');
const divsecond = document.getElementById('second');
const precedentBtn = document.getElementById('precedent');
const suivantBtn = document.getElementById('suivant');
const recapBtn = document.getElementById('recap'); 
const fieldset= document.getElementById('fieldset'); 
const contRec= document.getElementById('contRec'); 
const submit= document.getElementById('submit'); 
const deuxieme_associer=document.getElementById('deuxieme_associer');
const type_societe=document.getElementById('type_societe');  
const Typ_Sos=document.getElementById('Typ_Sos'); 


var ajoutAssocieClique = false;
   
var select;
var option;
var compteur = 3;
document.getElementById('ajouter_associé').addEventListener('click', function() {
           
  ajoutAssocieClique = true;
  
    // Récupérer l'élément parent
    var parentElement = document.getElementById('deuxieme_associer');
    
    // Créer le paragraphe "Informations sur le Deuxieme Associé"
    var infoParagraphe = document.createElement('p');
    infoParagraphe.id = 'infdeuxiAss';
    infoParagraphe.textContent = 'Informations sur l\'Associé '+mettreChiffre(compteur);
    parentElement.appendChild(infoParagraphe);
    
    // Créer les labels et les champs de saisie
    var elements = [
      { label: 'Nom :', type: 'text', name: 'nom', id: 'nomD'+compteur, required: true },
      { label: 'Prénom :', type: 'text', name: 'prenom', id: 'prenomD'+compteur, required: true },
      { label: 'Date de naissance :', type: 'date', name: 'date_naissance', id: 'date_naissanceD'+compteur, max: '2002-12-31', required: true },
      { label: 'Lieu de naissance :', type: 'text', name: 'lieu_naissance', id: 'lieu_naissanceD'+compteur, required: true },
      { label: 'Nationalité :', type: 'text', name: 'nationalité', id: 'nationalitéD'+compteur, required: true },
      { label: 'Profession :', type: 'text', name: 'profession', id: 'professionD'+compteur, required: true },
      { label: 'Numéro CNI :', type: 'number', name: 'cin', id: 'cinD'+compteur, min: '0', placeholder: 'Entrez le numéro de votre pièce d\'identité', required: true },
      { label: 'Date de Délivrance :', type: 'date', name: 'date_del', id: 'date_delD'+compteur, required: true },
      { label: 'Date d\'Expiration :', type: 'date', name: 'date_exp', id: 'date_expD'+compteur, required: true },
      { label: 'Adresse :', type: 'text', name: 'adresse', id: 'adresse_assD'+compteur, required: true },
      { label: 'Numéro de téléphone :', type: 'number', name: 'telephone', id: 'telephoneD'+compteur, min: '0', placeholder: 'Entrez votre numéro de téléphone', required: true },
      { label: 'Poucentage Détenu :', type: 'number', name: 'poucentage', id: 'poucentageD'+compteur, min: '0', max: '100', placeholder: 'Entrez le pourcentage détenu', required: true },
      { label: 'Pièce d\'identité :', type: 'file', name: 'documentass', id: 'documentassD'+compteur, required: true },
      { label: 'Situation matrimoniale :', type: 'select', name: 'situation_matrimoniale', id: 'situation_matrimonialeD'+compteur, options: ['Célibataire', 'Marié', 'Divorcé', 'Veuf'], required: true },
      { type: 'div', id: 'epouseDiv'+compteur, style:"display: none;",  children: [
        { label: 'Prénom et Nom du Conjoint :', type: 'text', name: 'nom_epouse', id: 'prenom_epouseD'+compteur , required: true },
        { label: 'Date de naissance :', type: 'date', name: 'date_naissance_epouse', id: 'date_naissance_epouseD'+compteur, max: '2003-12-31' , required: true },
        { label: 'Lieu de naissance du Conjoint :', type: 'text', name: 'lieu_naissance_epouse', id: 'lieu_naissance_epouseD'+compteur , required: true },
        { label: 'Nationalité :', type: 'text', name: 'nationalité', id: 'nationalité_conjointD'+compteur , required: true },
        { label: 'Date du mariage :', type: 'date', name: 'date_mariage', id: 'date_mariageD'+compteur , required: true },
        { label: 'Lieu du mariage :', type: 'text', name: 'lieu_mariage', id: 'lieu_mariageD'+compteur , required: true  },
        { label: 'Date du contrat de mariage :(s’il y a lieu)', type: 'date', name: 'date_contrat_mariage', id: 'date_contrat_mariageD'+compteur },
        { label: 'Nom et résidence du notaire :', type: 'text', name: 'non_resid_notaire', id: 'non_resid_notaireD'+compteur, required: true },
        { label: 'Régime matrimonial :', type: 'select', name: 'regime', id: 'regimeD'+compteur,  options: ['Choisir votre régime', 'Séparation', 'Communauté'] , required: true  }
      ]},
      { type: 'canvas', id: 'signatureCanvasDxm'+compteur, class:'canvasClass', width: '400', height: '200' },
      { type: 'button', onclick: 'clearSignatureA(); return false;', text: 'Effacer' },
    ];
    
    // Parcourir les éléments et les créer
    for (var i = 0; i < elements.length; i++) {
      var element = elements[i];
    
      if (element.type === 'button') {
        var button = document.createElement('button');
        button.type = 'button';
        button.onclick = element.onclick;
        button.textContent = element.text;
        button.addEventListener('click', clearSignatureA.bind(null, compteur));
        parentElement.appendChild(document.createElement('br'));
        parentElement.appendChild(button);
        parentElement.appendChild(document.createElement('br'));
        parentElement.appendChild(document.createElement('br'));

       
        continue;
      }
    
      if (element.type === 'canvas') {
        var canvas = document.createElement('canvas');
        canvas.id = element.id;
        canvas.width = element.width;
        canvas.height = element.height;
        canvas.classList.add('classCanvas')
    
        var label = document.createElement('label');
        label.htmlFor = element.id;
        label.textContent = 'Signature :';
    
        var requiredSpan = document.createElement('span');
        requiredSpan.classList.add('required');
        requiredSpan.textContent = '*';
        label.appendChild(requiredSpan); 
    
        parentElement.appendChild(label);
        parentElement.appendChild(canvas);
        parentElement.appendChild(document.createElement('br'));
        parentElement.appendChild(document.createElement('br'));
        

         // JavaScript code for signature functionality
         canvas.addEventListener('mousedown', function(event) {
          var isDrawing = true;
          var ctx = canvas.getContext('2d');
          ctx.beginPath();
          ctx.moveTo(event.offsetX, event.offsetY);

          canvas.addEventListener('mousemove', function(event) {
              if (isDrawing) {
                  ctx.lineTo(event.offsetX, event.offsetY);
                  ctx.stroke();
              }
          });

          canvas.addEventListener('mouseup', function() {
              isDrawing = false;
          });

          canvas.addEventListener('mouseleave', function() {
              isDrawing = false;
          });
      });
      


        continue;
      }
    
      var label = document.createElement('label');
      label.htmlFor = element.id;
      label.textContent = element.label;
    
      if (element.required) {
        var requiredSpan = document.createElement('span');
        requiredSpan.classList.add('required');
        requiredSpan.textContent = '*';
        label.appendChild(requiredSpan);
      }
    
      parentElement.appendChild(label);
    
       if (element.type === 'div') {
        var div = document.createElement('div');
        div.id = element.id;
        div.style = element.style;
    
        for (var j = 0; j < element.children.length; j++) {
          var childElement = element.children[j];
    
          var childLabel = document.createElement('label');
          childLabel.htmlFor = childElement.id;
          childLabel.textContent = childElement.label;
    
          if (childElement.required) {
            var requiredSpan = document.createElement('span');
            requiredSpan.classList.add('required');
            requiredSpan.textContent = '*';
            childLabel.appendChild(requiredSpan);
          }
    
          div.appendChild(childLabel);
          
          
          if (childElement.type === 'select') {
             select = document.createElement('select');
            select.name = childElement.name;
            select.id = childElement.id;

            for (var k = 0; k < childElement.options.length; k++) {
                 option = document.createElement('option');
                option.value = childElement.options[k];
                option.textContent = childElement.options[k];
                select.appendChild(option);
            }

            div.appendChild(select);
        } else {
            var input = document.createElement('input');
            input.type = childElement.type;
            input.name = childElement.name;
            input.id = childElement.id;
            input.classList.add('input');

            if (childElement.hasOwnProperty('min')) {
                input.min = childElement.min;
            }

            if (childElement.hasOwnProperty('max')) {
                input.max = childElement.max;
            }

            if (childElement.hasOwnProperty('placeholder')) {
                input.placeholder = childElement.placeholder;
            }

            div.appendChild(input);
        }

        div.appendChild(document.createElement('br'));
        div.appendChild(document.createElement('br'));
    }
    
        parentElement.appendChild(div);
      } else
      if (element.type === 'select') {
        var select = document.createElement('select');
        select.name = element.name;
        select.id = element.id;
    
        for (var j = 0; j < element.options.length; j++) {
          var option = document.createElement('option');
          option.value = element.options[j];
          option.textContent = element.options[j];
          select.appendChild(option);
        }

       
        // Ajouter un événement de changement d'option au select
        select.addEventListener('change', function() {
          var optionSelected = this.options[this.selectedIndex].value;
          // Afficher ou masquer le div relatif à l'épouse en fonction de l'option sélectionnée
          if (optionSelected.trim() === 'Marié') {
            div.style.display = 'block';
          } else {
            div.style.display = 'none';
          }
        });
    
        parentElement.appendChild(select);
      } else {
        var input = document.createElement('input');
        input.type = element.type;
        input.name = element.name;
        input.id = element.id;
        input.classList.add('input');
    
        if (element.hasOwnProperty('min')) {
          input.min = element.min;
        }
    
        if (element.hasOwnProperty('max')) {
          input.max = element.max;
        }
    
        if (element.hasOwnProperty('placeholder')) {
          input.placeholder = element.placeholder;
        }
    
        parentElement.appendChild(input);
       
      }
    
      parentElement.appendChild(document.createElement('br'));
      parentElement.appendChild(document.createElement('br'));
    }
    


    compteur++;
    

});

function clearSignatureA(compteur) {
  var canvas = document.getElementById('signatureCanvasDxm'+compteur);
  var ctx = canvas.getContext('2d');
  ctx.clearRect(0, 0, canvas.width, canvas.height);
}





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




var spanpoucentage = document.getElementById('spanpoucentage'); 

 type_societe.addEventListener('change', function() {
    // Vérifier si l'option sélectionnée est "pluripersonnelle"
    if (type_societe.value === 'Pluripersonelle') {
        deuxieme_associer.style.display = 'block';
        document.getElementById('infAss').innerHTML = 'Informations sur l\'Associé 1';
        spanpoucentage.style.display = 'block';
       
    } else{
        deuxieme_associer.style.display = 'none';
        document.getElementById('infAss').innerHTML = 'Informations sur l\'Associé';
        spanpoucentage.style.display='none';
    }
});

function supprimerOptionGerantByValue(value) {
    const gerantSelect = document.getElementById('gérant'); // Assurez-vous que cet élément existe
    const options = gerantSelect.options;

    // Rechercher l'index de l'option avec la valeur spécifiée
    for (let i = 0; i < options.length; i++) {
        if (options[i].value === value) {
            gerantSelect.removeChild(options[i]);
            break; // Sortir de la boucle après avoir supprimé l'option
        }
    }
}


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

// Fonction pour afficher le div premier et masquer le div second
function afficherDivpremier() {
    var prenomD = document.getElementById('prenomD').value;
    supprimerOptionGerantByValue(prenomD);
    for (i = 3; i < compteur; i++) {  
        var prenomDI = document.getElementById('prenomD'+i).value;
        supprimerOptionGerantByValue(prenomDI);
    }
    document.getElementById('moi').value = 'Moi';
    document.getElementById('moi').innerHTML = 'Moi meme';
    divpremier.style.display = 'block';
    divsecond.style.display = 'none';
    precedentBtn.style.display = 'none';
    suivantBtn.style.display='block';
    recapBtn.style.display='none';
    contRec.style.display= 'none';
    submit.style.display='none';
    Typ_Sos.style.display='block';
}



// fonction afficherRécap affiche la Récapitulation 
function afficherRécap(){
    
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
    var poucentage = document.getElementById('poucentage').value;

    
    var nom_societe = document.querySelector('#nom_societe').value;
    var objet_social = document.getElementById('objet_social').value;
    var montant_forfait = document.getElementById('montant_forfait').value;
    var montant = document.getElementById('montant').value;
    var adresse_societe = document.querySelector('#adresse_societe').value;
    var gérant = document.getElementById('gérant').value;
    var nom_gérant = document.getElementById('nom_gérant').value;
    var prénom_gérant = document.getElementById('prénom_gérant').value;  
    var nationalité_gérant = document.getElementById('nationalité_gérant').value;
    var profession_gérant = document.getElementById('profession_gérant').value;
    var email_gérant = document.getElementById('email_gérant').value; 
    var telephone_gerant = document.getElementById('telephone_gerant').value; 
    var documentgérant = document.getElementById('documentgérant').value;
    
    

   
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
    var poucentageD = document.getElementById('poucentageD').value;

    divsecond.style.display= 'none';
    recapBtn.style.display = 'none';
    Typ_Sos.style.display='none';

    if(nom_societe.trim()===''  ||  adresse_societe.trim()===''|| objet_social.trim()===''){
        alert('Veuillez remplir tous les champs avant de passer au récapitulatif.');
        divsecond.style.display= 'block';
        recapBtn.style.display = 'block';
        fieldset.style.display='block';
    }  else 
        if(montant_forfait.trim() !=='300000' && montant==='' ){
            alert('Veuillez renseigner le montant capital.');
            divsecond.style.display= 'block';
            recapBtn.style.display = 'block';
            fieldset.style.display='block';
    
            } 
            else if(montant_forfait.trim()==='300000'  && montant.trim() !=='' ){
                alert('Veuillez saisir un montant ou choisir le montant forfait.');
                divsecond.style.display= 'block';
                recapBtn.style.display = 'block';
                fieldset.style.display='block';
        
                } 
                else if (parseInt(montant, 10) < 300000 && montant_forfait.trim() !== '300000') {
                    alert('Veuillez saisir un montant supérieur au montant forfait.');
                    divsecond.style.display = 'block';
                    recapBtn.style.display = 'block';
                    fieldset.style.display = 'block';
                  }
                              
                    
    else if(gérant.trim()==='Autre'){
        
             if(nom_gérant.trim()==='' || nationalité_gérant.trim()==='' || profession_gérant.trim()==='' ||telephone_gerant.trim()===''|| prénom_gérant.trim()==='' || email_gérant.trim()===''  || documentgérant.trim()==='' ){
                alert('Veuillez remplir tous les champs avant de passer au récapitulatif.');
                divsecond.style.display= 'block';
                recapBtn.style.display = 'block';
                fieldset.style.display='block';
                
             }else if(telephone_gerant.toString().length!==9){
                alert('Le numero de téléphone doit être composer de 9 chiffres.');
                divsecond.style.display= 'block';
                recapBtn.style.display = 'block';
                fieldset.style.display='block';
            }
             else{
                divsecond.style.display= 'none';
                recapBtn.style.display = 'none';
                contRec.style.display='block';
                submit.style.display='block';
                precedentBtn.style.display = 'block';
              
             }
    }       
    else{
        divsecond.style.display= 'none';
        recapBtn.style.display = 'none';
        contRec.style.display='block';
        submit.style.display='block';
        precedentBtn.style.display = 'block';
      


    }
         var montant_choisie;
    if(montant_forfait.trim()!=='300000'){
        montant_choisie= montant;
    } else{
        montant_choisie= montant_forfait;
    }
      
   

    var recapitulatif = `
        
    <p class="infAss" id="infPAss">Informations le l'Associé</p>
    <p>Nom : <span class="recapId">${nom}</span></p>
    <p>Prénom : <span class="recapId">${prenom}</span></p>
    <p>Date de Naissance : <span class="recapId">${date_naissance}</span></p>
    <p>Lieu de Naissance : <span class="recapId">${lieu_naissance}</span></p> 
    <p>Nationalité : <span class="recapId">${nationalité}</span></p> 
    <p>Profession : <span class="recapId">${profession}</span></p> 
    <p>Adresse : <span class="recapId">${adresse_ass}</span></p>  
    <p>Numéro de Téléphone : <span class="recapId">${telephone}</span></p>   
    <p>Numéro CNI : <span class="recapId">${cin}</span></p>   
    <p>Date de Délivrance : <span class="recapId">${date_del}</span></p>   
    <p>Date d'Expiration : <span class="recapId">${date_exp}</span></p>   
    ${
        type_societe.value.trim() === 'Pluripersonelle'
            ? `
                <p>Pourcentage Détenu : <span class="recapId">${poucentage}</span></p>  `
            : ''
    }
    <p>Pièce d'identité : <span class="recapId">${documentass}</span></p>
    <p>Situation Matrimoniale : <span class="recapId">${situation_matrimoniale}</span></p>
    ${
        situation_matrimoniale.trim() === 'Marie'
            ? `<span id="spanEpouse">
                <p class="infEpouse">Informations sur le Conjoint</p>
                <p>Prénom et Nom du Conjoint : <span class="recapId">${prenom_epouse}</span></p>
                <p>Date de Naissance : <span class="recapId">${date_naissance_epouse}</span></p>
                <p>Lieu de Naissance : <span class="recapId">${lieu_naissance_epouse}</span></p>
                <p>Date de Mariage : <span class="recapId">${date_mariage}</span></p>
                <p>Nationalitée : <span class="recapId">${nationalité_conjoint}</span></p>
                <p>Lieu du Mariage : <span class="recapId">${lieu_mariage}</span></p>
                <p>Date du Contrat de mariage : <span class="recapId">${date_contrat_mariage}</span></p>
                <p>Nom et Résidence du Notaire : <span class="recapId">${non_resid_notaire}</span></p>
                <p>Régime Matrimonial : <span class="recapId">${regime}</span></p>
              </span>`
            : ''
    }
    ${
        type_societe.value.trim() === 'Pluripersonelle'
            ? ` <p class="infAss">Informations sur Associé 2</p>
            <p>Nom : <span class="recapId">${nomD}</span></p>
            <p>Prénom : <span class="recapId">${prenomD}</span></p>
            <p>Date de Naissance : <span class="recapId">${date_naissanceD}</span></p>
            <p>Lieu de Naissance : <span class="recapId">${lieu_naissanceD}</span></p> 
            <p>Nationalité : <span class="recapId">${nationalitéD}</span></p> 
            <p>Profession : <span class="recapId">${professionD}</span></p> 
            <p>Adresse : <span class="recapId">${adresse_assD}</span></p>  
            <p>Numéro de Téléphone : <span class="recapId">${telephoneD}</span></p>   
            <p>Numéro CNI : <span class="recapId">${cinD}</span></p>   
            <p>Date de Délivrance : <span class="recapId">${date_delD}</span></p>   
            <p>Date d'Expiration : <span class="recapId">${date_expD}</span></p>   
            <p>Pièce d'identité : <span class="recapId">${documentassD}</span></p>
            <p>Pourcentage Détenu : <span class="recapId">${poucentageD}</span></p>  
            <p>Situation Matrimoniale : <span class="recapId">${situation_matrimonialeD}</span></p>
            ${
                situation_matrimonialeD.trim() === 'Marie'
                    ? `<span id="spanEpouse">
                        <p class="infEpouse">Informations sur le Conjoint</p>
                        <p>Prénom et Nom du Conjoint : <span class="recapId">${prenom_epouseD}</span></p>
                        <p>Date de Naissance : <span class="recapId">${date_naissance_epouseD}</span></p>
                        <p>Lieu de Naissance : <span class="recapId">${lieu_naissance_epouseD}</span></p>
                        <p>Date de Mariage : <span class="recapId">${date_mariageD}</span></p>
                        <p>Nationalitée : <span class="recapId">${nationalité_conjointD}</span></p>
                        <p>Lieu du Mariage : <span class="recapId">${lieu_mariageD}</span></p>
                        <p>Date du Contrat de mariage : <span class="recapId">${date_contrat_mariageD}</span></p>
                        <p>Nom et Résidence du Notaire : <span class="recapId">${non_resid_notaireD}</span></p>
                        <p>Régime Matrimonial : <span class="recapId">${regimeD}</span></p>
                      </span>`
                    : ''
            }`
            : ''
    } `;

    
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
                var poucentageDI = document.getElementById('poucentageD'+i).value;
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
                    
                recapitulatif+=  `${
                    ajoutAssocieClique === true
                        ? ` <p class="infAss">Informations sur le l'Associé `+mettreChiffre(i)+`</p>
                        <p>Nom : <span class="recapId">${nomDI}</span></p>
                        <p>Prénom : <span class="recapId">${prenomDI}</span></p>
                        <p>Date de Naissance : <span class="recapId">${date_naissanceDI}</span></p>
                        <p>Lieu de Naissance : <span class="recapId">${lieu_naissanceDI}</span></p> 
                        <p>Nationalité : <span class="recapId">${nationalitéDI}</span></p> 
                        <p>Profession : <span class="recapId">${professionDI}</span></p> 
                        <p>Adresse : <span class="recapId">${adresse_assDI}</span></p>  
                        <p>Numéro de Téléphone : <span class="recapId">${telephoneDI}</span></p>   
                        <p>Numéro CNI : <span class="recapId">${cinDI}</span></p>   
                        <p>Date de Délivrance : <span class="recapId">${date_delDI}</span></p>   
                        <p>Date d'Expiration : <span class="recapId">${date_expDI}</span></p>   
                        <p>Pièce d'identité : <span class="recapId">${documentassDI}</span></p>
                        <p>Pourcentage Détenu : <span class="recapId">${poucentageDI}</span></p>  
                        <p>Situation Matrimoniale : <span class="recapId">${situation_matrimonialeDI}</span></p>
                        ${
                            situation_matrimonialeDI.trim() === 'Marie'
                                ? `<span id="spanEpouse">
                                    <p class="infEpouse">Informations sur le Conjoint</p>
                                    <p>Prénom et Nom du Conjoint : <span class="recapId">${prenom_epouseDI}</span></p>
                                    <p>Date de Naissance : <span class="recapId">${date_naissance_epouseDI}</span></p>
                                    <p>Lieu de Naissance : <span class="recapId">${lieu_naissance_epouseDI}</span></p>
                                    <p>Date de Mariage : <span class="recapId">${date_mariageDI}</span></p>
                                    <p>Nationalitée : <span class="recapId">${nationalité_conjointDI}</span></p>
                                    <p>Lieu du Mariage : <span class="recapId">${lieu_mariageDI}</span></p>
                                    <p>Date du Contrat de mariage : <span class="recapId">${date_contrat_mariageDI}</span></p>
                                    <p>Nom et Résidence du Notaire : <span class="recapId">${non_resid_notaireDI}</span></p>
                                    <p>Régime Matrimonial : <span class="recapId">${regimeDI}</span></p>
                                  </span>`
                                : ''
                        }`
                        : ''
                } `;

            }

            recapitulatif+=  `<p class="infSos">Informations sur la Société</p>
    <p>Dénomination : <span class="recapId">${nom_societe}</span></p>
    <p>Adresse : <span class="recapId">${adresse_societe}</span></p>
    <p>Montant Capital : <span class="recapId">${montant_choisie}FCFA</span></p>
    <p>Objet Social : <span class="recapId">${objet_social}</span></p>
    <p>Gérant : <span class="recapId">${gérant}</span></p>
    ${
        gérant.trim() === 'Autre'
            ? `<span id="spanGerant">
                <p class="infGer">Informations sur le Gérant</p>
                <p>Nom du Gérant : <span class="recapId">${nom_gérant}</span></p>
                <p>Prénom du Gérant : <span class="recapId">${prénom_gérant}</span></p>
                <p>Nationalité : <span class="recapId">${nationalité_gérant}</span></p>
                <p>Profession : <span class="recapId">${profession_gérant}</span></p>
                <p>Email : <span class="recapId">${email_gérant}</span></p> 
                <p>Numéro de Téléphone : <span class="recapId">${telephone_gerant}</span></p>   
                <p>Pièce d'identité : <span class="recapId">${documentgérant}</span></p>
              </span>
              `
            : ''
    }
   
`;

      document.getElementById('contRec').innerHTML = recapitulatif;


   
  
   
}

// Ajouter un gestionnaire d'événement pour le bouton suivant
suivantBtn.addEventListener('click', afficherDivsecond);

// Ajouter un gestionnaire d'événement pour le bouton précédent
precedentBtn.addEventListener('click', afficherDivpremier);
// Ajouter la récapitulation
recapBtn.addEventListener('click', afficherRécap);




// JavaScript code for signature functionality
window.addEventListener('DOMContentLoaded', (event) => {
    const canvas = document.getElementById('signatureCanvas');
    const ctx = canvas.getContext('2d');
    let isDrawing = false;

    canvas.addEventListener('mousedown', (event) => {
        isDrawing = true;
        ctx.beginPath();
        ctx.moveTo(event.offsetX, event.offsetY);
    });

    canvas.addEventListener('mousemove', (event) => {
        if (isDrawing) {
            ctx.lineTo(event.offsetX, event.offsetY);
            ctx.stroke();
        }
    });

    canvas.addEventListener('mouseup', () => {
        isDrawing = false;
    });

    canvas.addEventListener('mouseleave', () => {
        isDrawing = false;
    });
});


function clearSignature() {
    const canvas = document.getElementById('signatureCanvas');
    const ctx = canvas.getContext('2d');
    ctx.clearRect(0, 0, canvas.width, canvas.height);
}



//JavaScript code for signature functionality
window.addEventListener('DOMContentLoaded', (event) => {
    const canvas = document.getElementById('signatureCanvasDxm');
    const ctx = canvas.getContext('2d');
    let isDrawing = false;

    canvas.addEventListener('mousedown', (event) => {
        isDrawing = true;
        ctx.beginPath();
        ctx.moveTo(event.offsetX, event.offsetY);
    });

    canvas.addEventListener('mousemove', (event) => {
        if (isDrawing) {
            ctx.lineTo(event.offsetX, event.offsetY);
            ctx.stroke();
        }
    });

    canvas.addEventListener('mouseup', () => {
        isDrawing = false;
    });

    canvas.addEventListener('mouseleave', () => {
        isDrawing = false;
    });
});


function clearSignatureD() {
    const canvas = document.getElementById('signatureCanvasDxm');
    const ctx = canvas.getContext('2d');
    ctx.clearRect(0, 0, canvas.width, canvas.height);
}




