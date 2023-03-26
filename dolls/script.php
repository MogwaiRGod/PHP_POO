<?php

// import des classes
include 'classes/classes.php';

// début du script
echo "<pre>";

// instanciation de poupées russes, fermées et vides
$doll0 = new RussianDoll(0);
$doll1 = new RussianDoll(1);
$doll2 = new RussianDoll(2);
$doll3 = new RussianDoll(3);

// print_r($doll0);

// test des fonctions get
echo "<p>La poupée n°0 est de taille : " . $doll0->getSize() . ". <br>";
if ($doll0->getStatus() == false) {
    echo "La poupée n°0 est fermée. <br>";
}
if (is_null($doll0->getContains())) {
    echo "La poupée n°0 est vide. <br>";
}
if (!$doll0->getInside()) {
    echo "La poupée n°0 n'est à l'intérieur d'aucune poupée. <br>";
}

// ouverture de la plus grande poupée
$doll3->open();
if ($doll3->getStatus()) {
    echo "<p>La poupée n°3 est ouverte.</p>";
}

// on met une poupée plus petite dedans
echo "On met la poupée n°2 dedans. <br>";
$doll2->putIn($doll3);
if ($doll2->getInside()) {
    echo "La poupée n°2 est à l'intérieur de : ";
    print_r ($doll3);
}

// flemme de faire tous les tests OMGGGGGGGGGGGGG pas le temps

echo "</pre>";