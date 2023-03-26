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

    // fonction retournant le département de chaque membre de l'équipe
    public function getCountyMember() {
        $counties = [];
        foreach ($this->members as $member) {
            array_push($counties, $member->getAddress()->getCounty());
        }
        return $counties;
    }

    // fonction permettant de renvoyer un membre de l'équipe et qui retourne l'équipe
    public function kickMember($member) {
        unset($this->members[array_search($member, $this->members)]);
        return $this->members;
    }

    // fonction statique permettant de générer une équipe aléatoire selon le nombre entré en argument
    static public function randomTeam($nb = 5) {
        $team = new Team();

        for ($i=0; $i<$nb; $i++) {
            $team->addMember(Person::randomPerson());
        }
        return $team;
    }
}