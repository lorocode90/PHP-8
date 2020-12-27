<?php

class User 
{
    public function greet(string|array $message)
    {
        var_dump($message);
    }
}

$user = new User;
$user->greet(null);