<?php

use App\User;
use App\Role;
use App\Categorie;
use App\SousCategorie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        

        Role::create([
            'id' => '1',
            'role' => 'admin'
        ]);

        Role::create([
            'id' => '2',
            'role' => 'panneur'
        ]);
        Role::create([
            'id' => '3',
            'role' => 'depaneur'
        ]);




        //role


        User::create([
            'id' => '1',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'adresse' => 'kairouan',
            'phone' => '27432182',
            'login' => '27432182',
            
            'password' => '27432182',
            'role' => '0'
        ]);

        User::create([
            'id' => '2',
            'name' => 'panneur',
            'email' => 'panneur@gmail.com',
            'adresse' => 'kairouan',
            'phone' => '27432182',
            'login' => '27432182',
            'password' => '27432182',
            'role' => '1'
        ]);
        User::create([
            'id' => '3',
            'name' => 'depanneur',
            'email' => 'panneur@gmail.com',
            'adresse' => 'kairouan',
            'phone' => '27432182',
            'login' => '27432182',
            'password' => '27432182',
            'role' => '2'
        ]);

        //categorie des services
         
        Categorie::create([
            'id' => '1',
            'nom_categorie' => 'Petits travaux',
        ]);
        Categorie::create([
            'id' => '2',
            'nom_categorie' => 'Peinture, sol et mur',
        ]);
        Categorie::create([
            'id' => '3',
            'nom_categorie' => 'Électricité et éclairage',
        ]);
        Categorie::create([
            'id' => '4',
            'nom_categorie' => 'Plomberie, cuisine et salle de bain',
        ]);
        Categorie::create([
            'id' => '5',
            'nom_categorie' => 'Jardin et extérieur',
        ]);
        Categorie::create([
            'id' => '6',
            'nom_categorie' => 'Services généraux',
        ]);
        Categorie::create([
            'id' => '7',
            'nom_categorie' => 'Maison connectée & confort',
        ]);
  //sous_categorie des services id_categorie 1
         
  SousCategorie::create([
    'id' => '1',
    'categorie_id' => '1',
    'nom_sous_categorie' => 'Accroche murale',
]);


SousCategorie::create([
    'id' => '2',
    'categorie_id' => '1',
    'nom_sous_categorie' => 'Montage et démontage de meubles',
]);
SousCategorie::create([
    'id' => '3',
    'categorie_id' => '1',
    'nom_sous_categorie' => 'Réparation et rénovation de meubles',
]);
SousCategorie::create([
    'id' => '4',
    'categorie_id' => '1',
    'nom_sous_categorie' => 'Menuiserie',
]);
SousCategorie::create([
    'id' => '5',
    'categorie_id' => '1',
    'nom_sous_categorie' => 'Serruerie',
]);
SousCategorie::create([
    'id' => '6',
    'categorie_id' => '1',
    'nom_sous_categorie' => 'Pose et réparation de portes, fenêtres et volets',
]);

//sous_categorie des services id_categorie 2
 
SousCategorie::create([
    'id' => '7',
    'categorie_id' => '2',
    'nom_sous_categorie' => 'Pose de sol',
]);


SousCategorie::create([
    'id' => '8',
    'categorie_id' => '2',
    'nom_sous_categorie' => 'Rénovation de sol',
]);
SousCategorie::create([
    'id' => '9',
    'categorie_id' => '2',
    'nom_sous_categorie' => 'Rénovation de murs',
]);
SousCategorie::create([
    'id' => '10',
    'categorie_id' => '2',
    'nom_sous_categorie' => 'Peinture',
]);

//sous_categorie des services id_categorie 3
 
SousCategorie::create([
    'id' => '11',
    'categorie_id' => '3',
    'nom_sous_categorie' => 'Installations électriques',
     ]);


SousCategorie::create([
    'id' => '12',
    'categorie_id' => '3',
    'nom_sous_categorie' => 'Installation luminaire',
]);
SousCategorie::create([
    'id' => '13',
    'categorie_id' => '3',
    'nom_sous_categorie' => 'Énergie renouvelable / verte',
]);

      //sous_categorie des services id_categorie 4
 
      SousCategorie::create([
        'id' => '14',
        'categorie_id' => '4',
        'nom_sous_categorie' => 'Plomberie',
         ]);


    SousCategorie::create([
        'id' => '15',
        'categorie_id' => '4',
        'nom_sous_categorie' => 'Salle de bain',
    ]);
    SousCategorie::create([
        'id' => '16',
        'categorie_id' => '4',
        'nom_sous_categorie' => 'Cuisine',
    ]);
    SousCategorie::create([
        'id' => '17',
        'categorie_id' => '4',
        'nom_sous_categorie' => 'Réparation électroménager',
    ]);
    SousCategorie::create([
        'id' => '18',
        'categorie_id' => '4',
        'nom_sous_categorie' => 'Installation électroménager',
    ]);

 //sous_categorie des services id_categorie 5
 
 SousCategorie::create([
    'id' => '19',
    'categorie_id' => '5',
    'nom_sous_categorie' => 'Entretien jardin',
     ]);


SousCategorie::create([
    'id' => '20',
    'categorie_id' => '5',
    'nom_sous_categorie' => 'Aménagement jardin',
]);
SousCategorie::create([
    'id' => '21',
    'categorie_id' => '5',
    'nom_sous_categorie' => 'Aménagement extérieur',
]);
SousCategorie::create([
    'id' => '22',
    'categorie_id' => '5',
    'nom_sous_categorie' => 'Entretien extérieur',
]);
SousCategorie::create([
    'id' => '23',
    'categorie_id' => '5',
    'nom_sous_categorie' => 'Remise en état du sol',
]);

SousCategorie::create([
    'id' => '24',
    'categorie_id' => '5',
    'nom_sous_categorie' => 'Portes et clôtures',
]);
SousCategorie::create([
    'id' => '25',
    'categorie_id' => '5',
    'nom_sous_categorie' => 'Bucheronnage',
]);

    //sous_categorie des services id_categorie 6
 
    SousCategorie::create([
        'id' => '26',
        'categorie_id' => '6',
        'nom_sous_categorie' => 'Déménagement',
         ]);


    SousCategorie::create([
        'id' => '27',
        'categorie_id' => '6',
        'nom_sous_categorie' => 'Couture / Retouches',
    ]);
    SousCategorie::create([
        'id' => '28',
        'categorie_id' => '6',
        'nom_sous_categorie' => 'Aménagement intérieur',
    ]);
    SousCategorie::create([
        'id' => '29',
        'categorie_id' => '6',
        'nom_sous_categorie' => 'Entretien véhicules motorisés',
    ]);
    SousCategorie::create([
        'id' => '30',
        'categorie_id' => '6',
        'nom_sous_categorie' => 'Réparation véhicule',
    ]);

    SousCategorie::create([
        'id' => '31',
        'categorie_id' => '6',
        'nom_sous_categorie' => 'Nettoyage véhicule',
    ]);
    SousCategorie::create([
        'id' => '32',
        'categorie_id' => '6',
        'nom_sous_categorie' => 'Loisirs',
    ]);

     //sous_categorie des services id_categorie 7
 
     SousCategorie::create([
        'id' => '33',
        'categorie_id' => '7',
        'nom_sous_categorie' => 'Éclairage et ambiance',
         ]);


    SousCategorie::create([
        'id' => '34',
        'categorie_id' => '7',
        'nom_sous_categorie' => 'Assistance informatique',
    ]);
    SousCategorie::create([
        'id' => '35',
        'categorie_id' => '7',
        'nom_sous_categorie' => 'TV / Hifi / Wifi',
    ]);
    SousCategorie::create([
        'id' => '36',
        'categorie_id' => '7',
        'nom_sous_categorie' => 'Santé',
    ]);
    SousCategorie::create([
        'id' => '37',
        'categorie_id' => '7',
        'nom_sous_categorie' => 'Sécurité',
    ]);

    SousCategorie::create([
        'id' => '38',
        'categorie_id' => '7',
        'nom_sous_categorie' => 'Énergie / Chauffage',
    ]);
    SousCategorie::create([
        'id' => '39',
        'categorie_id' => '7',
        'nom_sous_categorie' => 'Domotique maison',
    ]);
      

    }
}