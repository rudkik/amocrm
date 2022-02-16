<?php

require __DIR__. '/vendor/autoload.php';

$clientId = '';
$clientSecret = '';
$redirectUri = '';

$apiClient = new \AmoCRM\Client\AmoCRMApiClient($clientId, $clientSecret, $redirectUri);

?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Пример веб-страницы</title>
</head>
<body>

</body>
</html>
