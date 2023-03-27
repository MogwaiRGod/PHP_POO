<?php

class Medicine {
    protected $name;
    protected $price;
    protected $quantity;

    public function __construct($nm, $prc = null, $qty = null) {
        $this->name = $nm;
        $this->price = $prc;
        $this->quantity = $qty;
    }

    /* GET */

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    /* LOGIQUE METIER */

    // fonction affichant tout du médicament
    public function showMed() {
        return $this->name . " coûte " . $this->price . "€ <br>" . $this->quantity . " disponible(s)";
    }

    // fonction permettant d'approvisionner le stock d'un médicament entré en argument
    public function storeStock($med) {
        return;
    }

    // fonction mettant à jour la quantité de médicament (soustraction)
    public function updateMed($qty) {
        return $this->quantity - $qty;
    }

}