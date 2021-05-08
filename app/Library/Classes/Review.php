<?php

namespace App\Library\Classes;

class Review{
    
    private $name;

    function __construct(string $name){
        $this->name = $name;
    }

    public function getName (): string{
        return $this->name;
    }

}