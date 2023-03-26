<?php

class Person {
    protected $name /* string */;
    protected $lastName /* string */;
    protected $address /* City $adress */;

    public function __construct($nm, $lstNm, $addr = "" /* peut être sans abri malheureusement */) {
        $this->name = $nm;
        $this->lastName = $lstNm;
        $this->address = $addr;
    }

    /* GET */

    // fonction retournant le prénom de la personne
    public function getName() {
        return $this->name;
    }

    // fonction retournant le nom de la personne
    public function getLastName() {
        return $this->lastName;
    }

    // fonction qui retourne l'adresse City de la personne
    public function getAddress() {
        return $this->address;
    }

    /* SET */

    // fonction permettant de changer le prénom de la personne et qui le retourne
    public function setName($newName) {
        $this->name = $newName;
        return $this->name;
    }

    // fonction permettant de changer le nom de la personne et qui le retourne
    public function setLastName($newName) {
        $this->lastName = $newName;
        return $this->lastName;
    }

    // fonction permettant de changer l'adresse de la personne et qui la retourne
    public function setAddress($newAddr /* City */) {
        $this->address->setName($newAddr->getName());
        $this->address->setCounty($newAddr->getCounty());
        return $this->address;
    }

    /* LOGIQUE METIER */

    // fonction retournant toutes les infos de la personne sous forme de tableau
    // <=> getAll
    public function getPerson() {
        return $this;
        // version alternative dans un tableau
        // return [
        //     $this->name,
        //     $this->lastName,
        //     $this->address,
        // ];
    }
}