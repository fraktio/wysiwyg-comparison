<?php

use Symfony\Component\HttpFoundation\Response;

require_once __DIR__ . '/../bootstrap.php';

$ret = $twig->render(
    'aloha.html.twig'
);

$response = new Response($ret);
$response->send();
