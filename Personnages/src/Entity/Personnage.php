<?php

namespace App\Entity;

class Personnage{
    public $pseudo;
    public $age;
    public $sexe;
    public $carac =[];

    public static $personnages = [];

    public function __construct($nom,$age,$sexe,$carac){
        
        $this->pseudo = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->carac = $carac;

        self::$personnages[]= $this;

    }

    public static function creerPersonnage(){
        $p1 = new Personnage("pierre",25,true,[
            "force" =>6,
            "agi" =>6,
            "intel" => 2
        ]);
        $p2 = new Personnage("paul",35,true,[
            "force" =>10,
            "agi" =>4,
            "intel" => 0
        ]);
        $p3 = new Personnage("jackie",19,true,[
            "force" =>1,
            "agi" =>8,
            "intel" => 5
        ]);
    }
}