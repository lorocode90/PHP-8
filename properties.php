<?php

/*class User
{
    public $name;
    public $lastname;

    public function __construct (string $name, string $lastname)
    {
        $this->name = $name;
        $this->lastname = $lastname;
    }
}*/

class User
{
    public function __construct (
        public string $name, 
        public string $lastname
    )
    { }
}

$user = new User('Italo', 'Morales');

var_dump($user);