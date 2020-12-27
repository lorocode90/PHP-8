<?php

$code = 'code_20253080';
$result = str_starts_with($code, 'code');

var_dump($result);

$code = '20253080_code';
$result = str_ends_with($code, '_code');

var_dump($result);

$code = '2025_code_3080';
$result = str_contains($code, 'code');

var_dump($result);

$code = '2025_code_3080';
$result = str_contains($code, 'code');

if ($result) {
    echo 'SI';
}