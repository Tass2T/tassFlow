<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('src/templates/');
$twig = new \Twig\Environment($loader, [
    'cache' => 'cache',
    'auto_reload' => true
]);