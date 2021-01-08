<?php

namespace App;

class Panier
{
    protected array $produits;
    

    public function FournirFacture(): array{




        $x = 0;//dénomination des articles

        $y = "";//le nom des articles séparés par une virgule
        

        $tabl = array_filter($this->produits, function (Article $nom) {
            return $nom->DonnerNom();
        });

        foreach ($tabl as $produit) {
            $x = $x + $produit->DonnerPrix();
        }

        foreach ($tabl as $produit) {
            if($y != "")
                $y = $y.", ".$produit->DonnerNom();
            else
                $y = $y.$produit->DonnerNom();
        }


        $facture = array(
            "cle" => $y,
            "cle2" => $x,
        );

        return $facture;
    }

    public function __construct(array $produits)
    {
        $this->produits = $produits;
    }

}
