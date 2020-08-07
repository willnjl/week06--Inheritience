<?php

namespace App\Languages;

class English extends Language
{
    protected $name =  "english";


    public function name() : string
    {
        return $this->name;
    }

    public function hello() : string
    {
        return "hello";
    }
}