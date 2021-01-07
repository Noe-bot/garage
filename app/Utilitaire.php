<?php

namespace App;

class Utilitaire extends Vehicule implements Article
{
    public int $compteurKilometrique;
    private int $volume;


    public function DonnerPrix(): int
    {
        return $this->prix + $this->volume*10;
    }

    public function DonnerNom(): string
    {
        return $this->nomDeMarque." ".$this->nom;
    }

    public function EstPopulaire():string{
              
        if($this->volume>11)
            return "cette voiture est populaire";
        else
            return "cette voiture n'est pas populaire";
    }

    public function __construct(string $nomDeMarque, string $nom, int $prix, int $compteurKilometrique, int $volume)
    {
        $this->compteurKilometrique = $compteurKilometrique;
        $this->volume = $volume;

        parent::__construct($nomDeMarque, $nom, $prix);
    }



}
