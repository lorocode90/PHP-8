<?php

$login = 'twitter';

$client = match ($login) {
    'github' => 'github_client_secret',
    'facebook' => 'facebook_client_secret',
    'twitter' => 'twitter_client_secret',
};

echo $client;