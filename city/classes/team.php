<?php

class Team {
    // liste des membres de l'équipe
    protected $members /* Person [] */;

    public function __construct($mbrs = [] /* équipe vide par défaut */) {
        $this->members = $mbrs;
    }

    /* GET */

    // fonction retournant l'intégralité de l'équipe sous forme de tableau de personnes
    public function getTeam() {
        return $this->members;
    }

    /* LOGIQUE METIER */

    // fonction permettant d'engager une personne et qui retourne l'équipe
    public function addMember($member) {
        array_push($this->members, $member);
        return $this->members;
    }

    // fonction permettant de renvoyer un membre de l'équipe et qui retourne l'équipe
    public function kickMember($member) {
        unset($this->members[array_search($member, $this->members)]);
        return $this->members;
    }
}