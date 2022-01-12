<?php

require_once 'config.php';

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'tassFlow' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . 'Main' . DIRECTORY_SEPARATOR . 'Products.php';

// echo $twig->render('index.twig', ['props' => __DIR__]);

$productController = new Products;

$productController->test();