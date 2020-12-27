<?php

class Category
{
    public $name = 'PHP';
}

class Post 
{
    public function category() : ?Category 
    {
        return new Category;
    }
}

$post = new Post;
var_dump($post->category()?->name);