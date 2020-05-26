<?php

require_once './vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, [
    'cache' => './compilation_cache',
]);

// Falta implementar los templates
//echo $twig->render('descendant.html.twig', $news);

