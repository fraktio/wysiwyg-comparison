<?php

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

require_once __DIR__ . '/../bootstrap.php';

$ret = $twig->render(
    'index.html.twig'
);

$response = new JsonResponse(array('success' => true));
$response->send();
