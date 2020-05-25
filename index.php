<?php

require_once './vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, [
    'cache' => './compilation_cache',
]);

$newsArray = [
    ["Title 1", "20/10/2020", "Short description 1"],
    ["Title 2", "20/10/2020", "Short description 2"],
    ["Title 3", "20/10/2020", "Short description 3"],
    ["Title 4", "20/10/2020", "Short description 4"],
    ["Title 5", "20/10/2020", "Short description 5"]];



?>