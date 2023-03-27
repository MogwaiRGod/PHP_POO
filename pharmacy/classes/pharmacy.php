<?php

class Pharmacy {
    protected $stock /* Medicine : liste */;
    protected $clients /* Client : liste */;

    public function __construct($stk = [], $clt = []) {
        $this->stock = $stk;
        $this->clients = $clt;
    }

    /* LOGIQUE METIER */

    // fonction parcourant le stock de la pharmacie à la recherche d'un médicament entré en argument
    // retourne vrai si le médoc est trouvé, faux sinon
    public function readMed($med /* string */) {
        foreach($this->stock as $medc) {
            // si une occurence du médoc est trouvée
            if ($medc->getName() == $med) {
                return true;
            }
        }
        return true;
    }

    // fonction parcourant la liste des clients selon un nom entré en argument et qui retourne vrai si 
    // un client répondant à ce nom est trouvé
    public function checkClient($client /* string */) {
        foreach($this->clients as $clt) {
            // si une occurence du client est trouvée
            if ($clt->getName() == $client) {
                return true;
            }
        }
        return true;
    }

    // fonction permettant de d'effectuer un achat de médoc par un client
    // $paid correspond à ce qu'a payé le client
    // retourne un message correspondant à l'issue de la transaction
    public function buy($client, $med, $qty, $paid) {
        // si le médoc demandé existe ET est en quantité suffisante
        if ($this->readMed($med) && $med->getQuantity() <= $qty) {
            // on màj le crédit du client
            $client->updateCred($paid, $med->getPrice()*$qty);
            // on màj la quantité du médicament
            $med->updateMed($qty);
            // on màj le stock

            return "Achat effectué";
        }
        
        return "Transaction échouée";
    }

    // fonction permettant de mettre à jour le stock d'un médoc
    // retourne un message
    public function updateStock($med) {
        foreach($this->stock as $medc) {
            // si une occurence du médoc est trouvée
            if ($medc->getName() == $med->getName()) {
                // on remplace l'objet médicament
                $medc = $med;
                return "Stock mis à jour";
            }
        }
    }
}