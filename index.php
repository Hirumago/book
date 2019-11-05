<?php
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('twig');
$twig = new \Twig\Environment($loader, []);

$data = array(
    'title' => 'Hello world'
);

echo $twig->render('page/index.html.twig', $data);