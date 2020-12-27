<?php

//class Post {}
//$post = new Post;
//var_dump($post::class);

class Github {}
class Facebook {}
class Twitter {}

$login = new Facebook;

$client = match ($login::class) {
    'Github' => 'github_client_secret',
    'Facebook' => 'facebook_client_secret',
    'Twitter' => 'twitter_client_secret',
};

echo $client;