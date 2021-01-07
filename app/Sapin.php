<?php

namespace App;

class Sapin implements Article
{

    public string $nom;


    public function DonnerPrix(): int
    {
        return 5;
    }

    public function DonnerNom(): string
    {
        return $this->nom;
    }


    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }
}