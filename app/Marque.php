<?php

namespace App;

class Marque
{
    protected string $nomDeMarque;

    public function __construct(string $nomDeMarque)
    {
        $this->nomDeMarque = $nomDeMarque;
    }

}
