<?php
header('Content-type: json/application');
use AmoCRM\Exceptions\AmoCRMApiException;
use AmoCRM\Models\AccountModel;
use League\OAuth2\Client\Token\AccessTokenInterface;
include_once __DIR__ . '/index2.php';

$accessToken = getToken();

$apiClient->setAccessToken($accessToken)
    ->setAccountBaseDomain($accessToken->getValues()['baseDomain'])
    ->onAccessTokenRefresh(
        function (AccessTokenInterface $accessToken, string $baseDomain) {
            saveToken(
                [
                    'accessToken' => $accessToken->getToken(),
                    'refreshToken' => $accessToken->getRefreshToken(),
                    'expires' => $accessToken->getExpires(),
                    'baseDomain' => $baseDomain,
                ]
            );
        }
    );

$method = $_SERVER['REQUEST_METHOD'];
//Получим свойства аккаунта со всеми доступными свойствами
try {
if ($method === 'POST'){
    if ($_POST['command'] == 'get_data') {
        http_response_code(200);
        $account = $apiClient->account()->getCurrent(AccountModel::getAvailableWith());
        $leads = $apiClient->leads()->get()->toArray();
        $contacts = $apiClient->contacts()->get()->toArray();
        print_r(json_encode($leads));
        print_r(json_encode($contacts));
    }
} else{
        http_response_code(405);
      print_r(json_encode(['error' => 'Not agree command']))  ;
    }
} catch (AmoCRMApiException $e) {
    printError($e);
}