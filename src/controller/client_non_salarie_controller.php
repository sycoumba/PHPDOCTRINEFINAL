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


$client_non_salarie = new Clientnonsalarie();
$client_non_salarie->setNom($nom);
$client_non_salarie->setPrenom($prenom);
$client_non_salarie->setActivite($activite);
$client_non_salarie->setNumero_CNI($numero_CNI);
$client_non_salarie->setId_client($id_client);


$entityManager-> persist($client_non_salarie);
$entityManager->flush();
}
?>