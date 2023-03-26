<?php

class RussianDoll {
    private $status /* booléen : ouverte ou fermée */;
    private $size /* entier : de 0 (plus petite taille) à... */;
    private $contains /* RussianDoll ; la poupée à l'intérieur de la poupée courante, le cas échéant */;
    private $inside /* booléen : est à l'intérieur d'une autre poupée ou non */;

    public function __construct($sz, $ctn = null /* la poupée est vide par défaut */, $insd = false, $sts = false /* fermée par défaut */) {
        $this->status = $sts;
        $this->size = $sz;
        $this->contains = $ctn;
        $this->inside = $insd;
    }

    /* GET */

    public function getStatus() {
        return $this->status;
    }

    public function getSize() {
        return $this->size;
    }

    public function getContains() {
        return $this->contains;
    }

    public function getInside() {
        return $this->inside;
    }

    /* LOGIQUE METIER */

    // fonction qui met le statut de la poupée à vrai (ouverte) si elle n'est pas dans une poupée
    // et qui retourne ce statut
    // sinon retourne faux
    public function open() {
        // si l'attribut inside est vrai càd si la poupée est l'intérieur d'une autre
        if ($this->contains) {
            // ne fait rien et retourne faux
            return false;
        }
        // sinon, change le statut de la poupée et retourne vrai
        $this->status = true;
        return true;
    }

    // fonction qui met le statut de la poupée à faux (fermée) et qui retourne ce statut
    public function close() {
        $this->status = false;
        return false;
    }

    // fonction qui permet de mettre la poupée courante dans une autre selon des conditions
    public function putIn($doll) {
        // si la poupée courante est fermée ET plus petite que $doll
        // et que celle-ci est ouverte
        if ((!$this->status) && $this->size < $doll->getSize() && $doll->getStatus()) {
            // on màj l'attribut inside de la poupée courante
            $this->inside = true;
            // et on met la poupée courante à l'intérieur de $doll
            $doll->getIn($this);
            // et on retourne $doll;
            return $doll;
        } 
        // si une de ces conditions n'est pas validée, on ne fait rien et on retourne faux
        return false;
    }

    // fonction permettant de mettre une poupée dans la poupée courante
    public function getIn($doll) {
        // si la poupée $doll est fermée ET plus petite que la poupée courante
        // et que la poupée courante est ouverte
        if ($this->status && $this->size > $doll->getSize() && (!$doll->getStatus())) {
            // on assigne $doll à l'attribut contains de la poupée courante
            $this->contains = $doll;
            // et on retourne $doll;
            return $doll;
        } 
        // si une de ces conditions n'est pas validée, on ne fait rien et on retourne faux
        return false;
    }

    // fonction permettant de sortir la poupée courante de la poupée entrée en argument
    public function getOut($doll) {
        // si la poupée courante est bien dans la $doll ET si celle-ci est ouverte
        if ($this->contains == $doll && $doll->getStatus()) {
            // on màj l'attribut containse de la poupée courante (null)
            $this->contains = null;
            // retourne la valeur d'contains
            return null;
        }
        // sinon ne fait rien et retourne faux
        return false;
    }
}