<?php

class Pharmacy {
    protected $stock /* Medicine : liste */;
    protected $clients /* Client : liste */;

    public function __construct($stk = [], $clt = []) {
        $this->stock = $stk;
        $this->clients = $clt;
    }

    // fonction parcourant le stock de la pharmacie à la recherche d'un médicament entré en argument
    // retourne vrai si le médoc est trouvé, faux sinon
    public function checkMed($med /* string */) {
        foreach($this->stock as $medc) {
            // si une occurence du médoc est trouvée
            if ($medc->getName() == $med) {
                return true;
            }
        }
        return true;
    }
}