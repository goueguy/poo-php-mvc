<?php 

require_once "classes/Compte.php";
require_once "classes/Etudiant.php";
//On instancie le compte
$compte1 = new Compte("GOUEGUY",100);
// $compte1->titulaire = "GOUEGUY";
// $compte1->solde = 500;
//On écrit dans la propriété solde
$compte1->deposer(100);
$compte1->retirerMontant(1000);
$compte1->retirerMOntant(5000);
var_dump($compte1);
$solde = $compte1->afficherSolde();
var_dump($solde);
// $compte2 = new Compte("JOHN",50000,"21-04-2021 8:45:05");
// // $compte2->titulaire = "ROBERT";
// // $compte2->solde = 389.25;
// var_dump($compte2);

$etudiant = new Etudiant("M0123-45","GOUEGUY","JEAN-LOUIS","08-02-2000",560);
$etudiant->payerInscription(400);
$etudiant->payerInscription(400);
echo $etudiant->getVersement();
?>