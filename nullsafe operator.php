<?php

class Tag 
{
    public function list() 
    {
        return [
            'php',
            'laravel'
        ];
    }
}

class Post 
{
    public function tags() 
    {
        return new Tag;
    }
}

$post = new Post;

var_dump($post->tags()?->list());