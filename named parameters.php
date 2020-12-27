<?php
/*
class Post 
{
    public function __construct (public $title, public $body) {}
}

$post = new Post(
    body: 'contenido',
    title: 'título', 
);

var_dump($post);
*/

function test ($title, $slug, $content) {
    var_dump($title, $slug, $content);
}

test(title: 'mi título', content: 'contenido', slug: 'mi-titulo');