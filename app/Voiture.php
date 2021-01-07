<?php

namespace App;

use DateTime;

class Voiture extends Vehicule implements Article 
{
    public int $compteurKilometrique;
    protected DateTime $AnneeConstruct;

    Public function NiveauUsure(): int{

        $v = date('Y') - $this->AnneeConstruct->format('Y');
        return $v*$this->compteurKilometrique;
    }

    public function DonnerPrix(): int
    {
        return $this->prix/$this->NiveauUsure(); 
    }

    public function DonnerNom(): string
    {
        return $this->nomDeMarque." ".$this->nom;
    }

    public function EstPopulaire():string{
              
        if($this->AnneeConstruct->format('Y')>2010)
            return "cette voiture est populaire";
        else
            return "cette voiture n'est pas populaire";
    }


    public function __construct(string $nomDeMarque, string $nom, int $prix, int $compteurKilometrique, DateTime $AnneeConstruct)
    {
        $this->compteurKilometrique = $compteurKilometrique;
        $this->AnneeConstruct = $AnneeConstruct;

        parent::__construct($nomDeMarque, $nom, $prix);

    }
}
