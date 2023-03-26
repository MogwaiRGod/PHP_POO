<?php

class City {
    protected $name /* string */;
    protected $county /* string département */; 

    public function __construct($nm, $cnty) {
        $this->name = $nm;
        $this->county = $cnty;
    }

    /* GET */

    // fonction retournant le nom de la ville
    public function getName() {
        return $this->name;
    }

    // fonction retournant le nom du département de la ville
    public function getCounty() {
        return $this->county;
    }

    /* SET */

    // fonction permettant de changer le nom de la ville (on sait jamais) et qui le retourne
    public function setName($newName) {
        $this->name = $newName;
        return $this->name;
    }

    // fonction permettant de changer le nom du département (ça peut arriver) et qui le retourne
    public function setCounty($newCounty) {
        $this->county = $newCounty;
        return $this->county;
    }

    /* LOGIQUE METIER */
        
    // fonction qui retourne un message indiquant le département dans lequel se situe la ville
    public function readCounty() {
        return "La ville $this->name est dans le département $this->county"; 
    }
}