<?php
/*
Ejemplo 1
function user($role) {
    if (! $role) {
        throw new Exception('Asigne un role de usuario');
    }

    return $role;
}

Ejemplo 1
function user($role) {
    return $role ?? throw new Exception('Asigne un role de usuario');
}

echo user(null);
*/

// Ejemplo 3
$user = true;

if ($user || throw new Exception('$user debe ser verdadero')) {
    echo '$user es verdadero';
}