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

    /* LOGIQUE METIER */

    // fonction affichant tout du médicament
    public function showMed() {
        return $this->name . " coûte " . $this->price . "€ <br>" . $this->stock . " disponible(s)";
    }

    // fonction permettant d'approvisionner le stock d'un médicament entré en argument
    public function storeStock($med) {
        return;
    }

}