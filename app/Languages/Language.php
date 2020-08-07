<?php

namespace App\Languages;

abstract Class Language
{
    protected $name; 

    abstract public function name() : string;
    abstract public function hello() : string;
}