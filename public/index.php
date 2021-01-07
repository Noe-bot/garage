<?php

namespace App;

use DateTime;

require __DIR__.'/../vendor/autoload.php';








$vroum = new Voiture('channel','peugot',100000,10,new DateTime('2010-01-01'));

// $vroum = new Utilitaire('channel','peugot',100000,10,11);

var_dump($vroum);

// $Yves = new Sapin('RoiDesForets');

// var_dump($Yves->DonnerNom());

// dump($Yves);

// Format attendu de la facture du panier

// $facture = [
//     "Peugoet 205, Sapin Fraicheur océan", // voir => https://www.php.net/manual/en/function.implode
//     505,
// ];
