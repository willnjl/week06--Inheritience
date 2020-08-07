<?php

namespace App\Languages;

class French extends Language
{
    protected $name =  "French";


    public function name() : string
    {
        return $this->name;
    }

    public function hello() : string
    {
        return "Bon Jour";
    }
}