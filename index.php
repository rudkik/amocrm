

<?php

require __DIR__. '/vendor/autoload.php';

$clientId = '';
$clientSecret = '';
$redirectUri = '';

$apiClient = new \AmoCRM\Client\AmoCRMApiClient($clientId, $clientSecret, $redirectUri);