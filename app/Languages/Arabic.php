<?php

namespace App\Languages;

class Arabic extends Language
{
    protected $name =  "Arabic";


    public function name() : string
    {
        return $this->name;
    }

    public function hello() : string
    {
        return "مرحبا" . ": marhabaan";
    }
}