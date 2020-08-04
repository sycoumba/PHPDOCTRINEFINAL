<?php
require_once "../../bootstrap.php";

extract($_POST);
$id_client = 1;
if (isset($valider)){

    $client = new Client();
    $client-> setAdresse($adresse);
    $client->setTelephone($telephone);
    $client-> setEmail($email);

    $entityManager-> persist($client);
    $entityManager->flush();

    $client_salarie = new Clientsalarie();
$client_salarie->setNom($nom);
$client_salarie->setPrenom($prenom);
$client_salarie->setProfession($profession);
$client_salarie->setSalaire_actuel($salaire_actuel);
$client_salarie->setNom_entreprise($nom_entreprise);
$client_salarie->setAdresse_entreprise($adresse_entreprise);
$client_salarie->setIdentifiant_entreprise($identifiant_entreprise);
$client_salarie-> setNumero_CNI($numero_CNI);
$client_salarie->setId_client($id_client);


    $entityManager-> persist($client_salarie);
$entityManager->flush();
}
    



?>