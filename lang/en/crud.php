<?php

return [
    'common' => [
        'actions' => 'Actions',
        'create' => 'Create',
        'edit' => 'Edit',
        'update' => 'Update',
        'new' => 'New',
        'cancel' => 'Cancel',
        'attach' => 'Attach',
        'detach' => 'Detach',
        'save' => 'Save',
        'delete' => 'Delete',
        'delete_selected' => 'Delete selected',
        'search' => 'Search...',
        'back' => 'Back to Index',
        'are_you_sure' => 'Are you sure?',
        'no_items_found' => 'No items found',
        'created' => 'Successfully created',
        'saved' => 'Saved successfully',
        'removed' => 'Successfully removed',
    ],

    'associes' => [
        'name' => 'Associes',
        'index_title' => 'Associes List',
        'new_title' => 'New Associe',
        'create_title' => 'Create Associe',
        'edit_title' => 'Edit Associe',
        'show_title' => 'Show Associe',
        'inputs' => [
            'Nom' => 'Nom',
            'Prenom' => 'Prenom',
            'DateNaissance' => 'Date Naissance',
            'LieuNaissance' => 'Lieu Naissance',
            'Nationalite' => 'Nationalite',
            'Profession' => 'Profession',
            'CNI' => 'Cni',
            'DateDelivrance' => 'Date Delivrance',
            'DateExpiration' => 'Date Expiration',
            'Adresse' => 'Adresse',
            'Telephone' => 'Telephone',
            'PieceIdentite' => 'Piece Identite',
            'SituationMatrimoniale' => 'Situation Matrimoniale',
            'societe_id' => 'Societe',
        ],
    ],

    'conjoints' => [
        'name' => 'Conjoints',
        'index_title' => 'Conjoints List',
        'new_title' => 'New Conjoint',
        'create_title' => 'Create Conjoint',
        'edit_title' => 'Edit Conjoint',
        'show_title' => 'Show Conjoint',
        'inputs' => [
            'PrenomNom' => 'Prenom Nom',
            'DateNaissance' => 'Date Naissance',
            'LieuNaissance' => 'Lieu Naissance',
            'Nationalite' => 'Nationalite',
            'DateMariage' => 'Date Mariage',
            'LieuMariage' => 'Lieu Mariage',
            'DateContratMariage' => 'Date Contrat Mariage',
            'NomResidentNotaire' => 'Nom Resident Notaire',
            'RegimeMatrimoniale' => 'Regime Matrimoniale',
            'associe_id' => 'Associe',
        ],
    ],

    'gerants' => [
        'name' => 'Gerants',
        'index_title' => 'Gerants List',
        'new_title' => 'New Gerant',
        'create_title' => 'Create Gerant',
        'edit_title' => 'Edit Gerant',
        'show_title' => 'Show Gerant',
        'inputs' => [
            'Nom' => 'Nom',
            'Prenom' => 'Prenom',
            'Nationalite' => 'Nationalite',
            'Profession' => 'Profession',
            'Email' => 'Email',
            'Telephone' => 'Telephone',
        ],
    ],

    'all_infos' => [
        'name' => 'All Infos',
        'index_title' => 'AllInfos List',
        'new_title' => 'New Infos',
        'create_title' => 'Create Infos',
        'edit_title' => 'Edit Infos',
        'show_title' => 'Show Infos',
        'inputs' => [
            'TitreSite' => 'Titre Site',
            'adresseSite' => 'Adresse Site',
            'TelephoneSite' => 'Telephone Site',
            'EmailSite' => 'Email Site',
            'Localisation' => 'Localisation',
        ],
    ],

    'levee_fonds' => [
        'name' => 'Levee Fonds',
        'index_title' => 'LeveeFonds List',
        'new_title' => 'New Levee fond',
        'create_title' => 'Create LeveeFond',
        'edit_title' => 'Edit LeveeFond',
        'show_title' => 'Show LeveeFond',
        'inputs' => [
            'DescriptionProjet' => 'Description Projet',
            'EtatAvancement' => 'Etat Avancement',
            'BesoinFinancement' => 'Besoin Financement',
            'ModaliteRemboursement' => 'Modalite Remboursement',
            'Garanties' => 'Garanties',
        ],
    ],

    'profiles' => [
        'name' => 'Profiles',
        'index_title' => 'Profiles List',
        'new_title' => 'New Profile',
        'create_title' => 'Create Profile',
        'edit_title' => 'Edit Profile',
        'show_title' => 'Show Profile',
        'inputs' => [
            'Photo' => 'Photo',
            'Adresse' => 'Adresse',
            'Telephone' => 'Telephone',
        ],
    ],

    'societes' => [
        'name' => 'Societes',
        'index_title' => 'Societes List',
        'new_title' => 'New Societe',
        'create_title' => 'Create Societe',
        'edit_title' => 'Edit Societe',
        'show_title' => 'Show Societe',
        'inputs' => [
            'Type' => 'Type',
            'Denomination' => 'Denomination',
            'Adresse' => 'Adresse',
            'MontantCapital' => 'Montant Capital',
            'gerant_id' => 'Gerant',
        ],
    ],

    'users' => [
        'name' => 'Users',
        'index_title' => 'Users List',
        'new_title' => 'New User',
        'create_title' => 'Create User',
        'edit_title' => 'Edit User',
        'show_title' => 'Show User',
        'inputs' => [
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
            'profile_id' => 'Profile',
        ],
    ],

    'roles' => [
        'name' => 'Roles',
        'index_title' => 'Roles List',
        'create_title' => 'Create Role',
        'edit_title' => 'Edit Role',
        'show_title' => 'Show Role',
        'inputs' => [
            'name' => 'Name',
        ],
    ],

    'permissions' => [
        'name' => 'Permissions',
        'index_title' => 'Permissions List',
        'create_title' => 'Create Permission',
        'edit_title' => 'Edit Permission',
        'show_title' => 'Show Permission',
        'inputs' => [
            'name' => 'Name',
        ],
    ],
];
