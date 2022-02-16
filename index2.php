<?php

use AmoCRM\Client\AmoCRMApiClient;

include_once __DIR__ . '/vendor/autoload.php';


$clientId = '85a6ce1a-7fd5-4074-8835-131b85aa20ac';
$clientSecret = 'sE5UhNu4thnSY5kmZZrWkblUgihtWUJKbHuXdG5XpuB6mH8MzkkpyI4DHoMZssVi';
$redirectUri = 'https://answering-revolutio.000webhostapp.com';

$apiClient = new AmoCRMApiClient($clientId, $clientSecret, $redirectUri);

include_once __DIR__ . '/token_actions.php';
include_once __DIR__ . '/error_printer.php';
