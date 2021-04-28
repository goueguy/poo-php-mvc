<?php 

require_once "classes/Compte.php";
require_once "classes/Etudiant.php";
require_once "classes/CompteEpargne.php";
require_once "classes/CompteCourant.php";
require_once "classes/CompteEpargneCourant.php";

//On instancie le compte
$compte = new CompteCourant("goue",500,200);
$compte->retirerMontant(50);
$compte->setTitulaire("JAMES");

$compteEpargne = new CompteEpargneCourant("Benoit",200,10,200);

$compteEpargne->verserInterets();
$compteEpargne->retirerMontant(500);
var_dump($compteEpargne);