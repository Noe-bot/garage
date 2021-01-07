<?php

namespace App;

abstract class Vehicule extends Marque
{
    public string $nom;
    protected int $prix;

    abstract public function EstPopulaire(): string;
    
    public function __construct(string $nomDeMarque, string $nom, int $prix)
    {
        $this->nom = $nom;
        $this->prix = $prix;
        parent::__construct($nomDeMarque);

    }
}
