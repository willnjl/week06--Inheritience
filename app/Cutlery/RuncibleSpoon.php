<?php

namespace App\Cutlery;

class RuncibleSpoon extends Spoon
{
    public function scoop() : Spoon
    {
        $this->numScoops += 2;
        return $this;
    }
}