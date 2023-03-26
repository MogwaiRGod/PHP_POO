<?php

class Client {
    protected $name;
    protected $credit /* flottant : monnaie que le client doit à la pharma */;

    public function __construct($nm, $cred = 0 /* ne doit rien par défaut */){
        $this->name = $nm;
        $this->credit = $cred;
    }

    /* logique métier */

    // fonction retournant le nom et le crédit du client
    public function showClient() {
        return $this;
    }

    // fonction mettant à jour le crédit du client, selon la somme qu'il a payée ($paid), 
    // et celle qu'il doit payer ($price)
    // retourne le crédit du client
    public function updateCred($paid, $price) {
        $this->credit = $price - $paid;
        return $this->credit;
    }
}