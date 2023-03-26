<?php

// import des classes
include 'classes/classes.php';

// début script
echo "<pre>";

/* tests de la classe ville */
$LGM = new City("La Grande-Motte", "Hérault");

// get
echo $LGM->getName() . "<br>";
echo $LGM->getCounty() . "<br>";
echo $LGM->readCounty() . "<br>";

// set
$LGM->setName("Lol");
$LGM->setCounty("Yo");

// logique métier
echo $LGM->readCounty() . "<br>";

echo "<hr>";

/* tests de la classe personne */
$doudou = new Person("Bob", "Doudou", new City("LGM", 34));

// get
echo $doudou->getName() . "<br>";
echo $doudou->getLastName() . "<br>";
print_r($doudou->getAddress());
echo "<br>";

// set
echo $doudou->setName("Gros Bill") . "<br>";
echo $doudou->setLastName("Billy") . "<br>";
print_r($doudou->setAddress(new City("Montpellier", 34)));
echo "<br>";

// logique métier
print_r($doudou->getPerson());

echo "<hr>";

/* tests de la classe équipe */

$mtp6 = new Team([$doudou]);

// get
print_r($mtp6->getTeam());

// logique métier
print_r($mtp6->addMember(new Person("Billy", "Lol", new City("Nantes", 44))));
print_r($mtp6->kickMember($doudou));

echo "</pre>";