<?php
/*
try {
    echo null ?? throw new Exception();
} catch (Exception) {
    echo 'Es null';
}
*/

function user($role) {
    return $role ?? throw new Exception();
}

try {
    echo user('admin');
} catch (Exception) {
    echo 'Asigne un role de usuario';
}