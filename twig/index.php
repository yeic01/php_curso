<?php

require_once './vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, array());

$personas = ['juan', 'pedro', 'raul', 'javier'];
$cursoTerminado = true;

echo $twig->render('index.html.twig', compact('personas', 'cursoTerminado'));
