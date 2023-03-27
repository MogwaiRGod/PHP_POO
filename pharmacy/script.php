<?php

/* classes */
include 'classes/classes.php';

/* fonctions */
include 'php/functions.php';

/* script */
echo "<pre>Premier client :<br>";

/* tests de la classe client */
$doudou = new Client("Doudou");
print_r($doudou->showClient());

echo "<br><hr><br>";

/* test de la classe médicament */
echo "<br>Premier médoc :<br>";
$cocaine = new Medicine ("Cocaïne", 200, 5);
print_r($cocaine->showMed());

echo "<br><hr><br>Première pharmacie : <br>";

/* test de la classe pharmacie */
$bigPharma = new Pharmacy([$cocaine], [$doudou]);
print_r($bigPharma);
echo $bigPharma->readMed("Cocaïne");