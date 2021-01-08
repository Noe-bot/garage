<?php

namespace App;

use DateTime;

require __DIR__.'/../vendor/autoload.php';



//Test du panier
/*
$vroum = new Voiture('channel','peugot',100000,10,new DateTime('2010-01-01'));

$vroum2 = new Utilitaire('renault','senic',100000,10,11);

$vroum3 = new Utilitaire('coca','pompier',100000,10,11);

$Yves = new Sapin('RoiDesForets');

$tab = array($vroum,$vroum2,$vroum3,$Yves);

$shopped = new panier($tab);

var_dump($shopped);

var_dump($shopped->FournirFacture());
*/


//Test du sapin
/*

$Yves = new Sapin('RoiDesForets');

var_dump($Yves->DonnerNom());

dump($Yves);
*/

// Format attendu de la facture du panier

// $facture = [
//     "Peugoet 205, Sapin Fraicheur océan", // voir => https://www.php.net/manual/en/function.implode
//     505,
// ];
