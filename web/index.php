<?php

use Symfony\Component\HttpFoundation\Response;

require_once __DIR__ . '/../bootstrap.php';

$ret = $twig->render(
    'index.html.twig',
    [
        'editors' => [
            'aloha',
            'raptor',
        ]
    ]
);

$response = new Response($ret);
$response->send();
