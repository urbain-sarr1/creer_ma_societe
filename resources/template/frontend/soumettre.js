// Importer la bibliothèque jsPDF
import jsPDF from 'jspdf';

// ...

// Écouter l'événement de soumission du formulaire
formulaire.addEventListener('submit', function(e) {
  e.preventDefault(); // Empêcher la soumission du formulaire pour le moment

  // Récupérer les valeurs des champs de formulaire
  const nomAssocie = document.getElementById('nom').value;
  const adresseAssocie = document.getElementById('adresse').value;
  const numeroPieceAssocie = document.getElementById('cin').value;
  const dateDelivranceCNI = document.getElementById('date_del').value;
  // Récupérer les autres valeurs de formulaire

  // Construire le texte final avec les valeurs des champs de formulaire
  const texteFinal = `PROCURATION SPECIALE PAR

${nomAssocie}

POUR

SUNUDROIT.TECH

(pour la création de Dénomination de la société)


Nom Associé, demeurant à ${adresseAssocie}, titulaire de la pièce d'identité n° ${numeroPieceAssocie} du ${dateDelivranceCNI} CNI Associé, donne, par la présente, procuration spéciale, avec droit de substitution général dans les limites de ce qui est requis ou permis par la loi, à la personne suivante (ci-après, le Mandataire) :

SUNUDROIT.TECH ayant son siège social à la Cité Keur Gorgui, Lot n°40, 6ème étage à Dakar, Sénégal ;

Pour participer - séparément ou conjointement - en son nom et pour son compte, à la constitution de la société unipersonnelle à responsabilité limitée dénommée Dénomination de la société de droit Sénégalais.
En conséquence :
- Etablir les actes, documents et procès-verbaux, y compris l'acte de nomination du ou des dirigeants sociaux utiles ou nécessaires à la constitution de la société, le tout en conformité avec les lois et règlements en vigueur ;
- signer tout document ;
- et, plus généralement, faire tout ce qui peut se rapporter, de près ou de loin, à la constitution de la société, en conformité avec les dispositions législatives et règlementaires en vigueur.


La présente procuration est signée à Dakar le Date Système

Par ${nomAssocie}

Signature Associé`;

  // Générer un fichier PDF
  const pdf = new jsPDF();
  pdf.text(texteFinal, 10, 10); // Ajouter le texte au fichier PDF

  // Enregistrer le fichier PDF
  pdf.save('Procuration.pdf');

  // Soumettre le formulaire
  formulaire.submit();
});
