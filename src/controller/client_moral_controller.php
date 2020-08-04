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


    $client_moral = new Clientmoral();
    $client_moral->setNom_entreprise($nom_entreprise);
    $client_moral->setType_entreprise($type_entreprise);
    $client_moral->setRaison_social($raison_social);
    $client_moral->setIdentifiant_entreprise($identifiant_entreprise);
    $client_moral->setAdresse_entreprise($adresse_entreprise);
    $client_moral->setId_client($id_client);


$entityManager-> persist($client_moral);
$entityManager->flush();
}

?>