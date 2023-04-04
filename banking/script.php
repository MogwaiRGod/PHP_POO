<?php

require 'models/Compte.php';

echo "<h2>Exercice 1</h2>";

// création de 2 comptes bancaires
$compteA = new Compte(44);
$compteB = new Compte(34);

echo "<p>" . "Dépôt de 500€ sur A" . "<br>";
$compteA->deposer(500);
echo "Solde de A : " . $compteA->afficherSolde() . "<br><hr>";

echo "Dépôt de 1000€ sur B" . "<br>";
$compteB->deposer(1000);
echo "Solde de B : " . $compteB->afficherSolde() . "<br><hr>";

echo "Retrait de 10€ sur B" . "<br>";
$compteB->retirer(10);
echo "Solde de B : " . $compteB->afficherSolde() . "<br><hr>";

echo "Virement de 75€ de A->B" . "<br>";
$compteA->transferer(75, $compteB);
echo "Solde de A : " . $compteA->afficherSolde() . "<br>";
echo "Solde de B : " . $compteB->afficherSolde() . "<br><hr></p>";


/*----------------------------------------------------------------*/
echo "<h2>Exercice 2</h2><p>";

// création d'un tableau qui contiendra 10 comptes
$tabComptes = [] ;

// instanciation des 10 comptes dans le tableau
for($i=0 ; $i<10; $i++) {
    $tabComptes[$i] = new Compte($i);
}

// mouvements sur les comptes
echo "Dépot de 200 euros plus une somme égale à 100 fois l'index<br>";
for($i=0 ; $i<10; $i++) {
    $tabComptes[$i]->deposer(200 + 100*$i);

    echo $i . " - Solde : " . $tabComptes[$i]->afficherSolde() . "<br>";
}

echo "<hr>";

for($i=0 ; $i<10; $i++) {
    echo "Virement de 20€ de " . $i . " -> comptes suivants<br>";
    for ($j = $i+1; $j <10; $j++) {
        $tabComptes[$i]->transferer(20, $tabComptes[$j]);
        echo $j . " - Solde : " . $tabComptes[$j]->afficherSolde() . "<br>";
    }
    echo "<hr><br>" . $i . " - Solde : " . $tabComptes[$i]->afficherSolde() . "<br><hr>";
}

// Enfin, vous afficherez les soldes de tous les comptes.
echo "Solde de tous les comptes :<br>";
foreach($tabComptes as $compte) {
    echo $compte->afficherNumero() . " : " . $compte->afficherSolde() . "<br>";
}

echo "</p>";