<?php

class Medicine {
    protected $name;
    protected $price;
    protected $stock;

    public function __construct($nm, $prc, $stck) {
        $this->name = $nm;
        $this->price = $prc;
        $this->stock = $stck;
    }

    /* logique métier */

    // fonction affichant tout du médicament
    public function showMed() {
        return $this;
    }

    // fonction permettant d'approvisionner le stock d'un médicament entré en argument
    public function storeStock($med) {
        return;
    }
}