<?php

class Compte {
    private $solde;
    private $numero;

    public function __construct($no, $sld = 0) {
        $this->solde = $sld;
        $this->numero = $no;
    }

    /* GET */

    public function afficherSolde() {
        return $this->solde;	
    }

    public function afficherNumero() {
        return $this->numero;	
    }

    /* LOGIQUE METIER */

    public function deposer($montant) {
        $this->solde += $montant;
    }
    
    public function retirer($montant) {
        $this->solde -= $montant;
    }

    public function transferer($montant, Compte $compte) {
        $this->retirer($montant);
        $compte->deposer($montant);
    }
}