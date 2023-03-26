<?php

class Person {
    /* attributs */
    protected $name /* string */;
    protected $lastName /* string */;
    protected $address /* City $adress */;

    /* constantes de classe */
    const $NAMES = ["Pierre", "Pierrot", "Pedro", "Brigitte", "Bribri", "Yassine", "Cunégonde", "Clitorine", "Lala", "Po", "Jane", "John"];
    const $LASTNAMES = ["Smith", "Doe", "Massiet", "Martin", "Love", "Bro", "Bruh", "Certif"];
    const $ADDRESSES = [
        new City("Los Angeles", "California"),
        new City("La Grande-Motte", "Héraut"),
        new City("Montpellier", "Héraut"),
        new City("Nantes", "44 RPZ"),
        new City("Aix-en-Provence", 13),
        new City("Rodez", "Aveyron"),
        new City("Night City", "NUSA"),
        new City("BeWeb", "BeWeb Land"),
        new City("Chez Pedro", "District of Lovers")
    ];


    /* méthodes */
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
        $this->address=$newAddr;
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

    // fonction statique permettant de créer une personne aléatoire
    public static function randomPerson() {
        print_r(self::NAMES[mt_rand(0, count(self::NAMES) -1)]);
        // return new Person(
        //     /* prénom aléatoire */
        //     self::NAMES[mt_rand(0, count(self::NAMES) -1)],
        //     /* nom aléatoire */
        //     self::LASTNAMES[mt_rand(0, count(self::LASTNAMES) -1)],
        //     /* adresse aléatoire */
        //     self::ADDRESSES[mt_rand(0, count(self::LASTNAMES) -1)]
        // );
    }
}