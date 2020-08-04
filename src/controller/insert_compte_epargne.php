<?php

require_once "../../bootstrap.php";

extract($_POST);
$id_client = 1;
$id_compte = 1;
$id_responsable = 1;
if (isset($valider))
//var_dump($_POST);

{

$compte = new Compte ();
$compte->setNumero_compte($numero_compte);
$compte->setCle_rib($cle_rib);
$compte->setSolde_compte($solde_compte);
$compte->setNumero_agence($numero_agence);
$compte->setDate_ouverture($date_ouverture);
$compte->setId_client($id_client);
$compte->setId_responsablet($id_responsable);

$entityManager->persist($compte);
$entityManager->flush();

 $Compte_epargne = new Compteepargne();
 $Compte_epargne->setFrais_ouverture($frais_ouverture);
 $Compte_epargne->setMontant_remuneration($montant_remuneration);
 $Compte_epargne->setId_compte($id_compte);

 $entityManager->persist($Compte_epargne);
 $entityManager->flush();
 }

?>