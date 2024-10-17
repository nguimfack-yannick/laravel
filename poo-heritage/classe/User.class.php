<?php

class User{
    
    private $name;
    private $password;

    public function __construct($n,$p)
    {
       $this->name=$n; 
       $this->password=$p; 
    }
    public function getName(): mixed{
        return $this->name;
    }
    public function getPassword():mixed{
        return $this->password;
    }
}