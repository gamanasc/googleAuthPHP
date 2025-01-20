<?php 

require __DIR__ . "/vendor/autoload.php";

// Puxando as variáveis de ambiente do arquivo .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Inicializando o cliente do google
$client = new Google\Client;

$client->setClientId( $_ENV["CLIENT_ID"] );
$client->setClientSecret( $_ENV["CLIENT_SECRET"] );
$client->setRedirectUri("http://localhost:8000/redirect.php");

if(!isset($_GET['code'])){
    exit("Erro #1: Código inválido");
}

$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

if(isset($token['access_token'])){
    $client->setAccessToken($token['access_token']);
    
    
    $oauth = new Google\Service\Oauth2($client);
    $userInfo = $oauth->userinfo->get();

    
    // Atributos da conta 
    // Disponível para consulta em: https://github.com/googleapis/google-api-php-client-services/blob/main/src/Oauth2/Userinfo.php
    
    // Campos disponíveis:
    // email | familyName | gender | givenName | hd | id | link | locale | name | picture | verifiedEmail
    session_start();

    $_SESSION['name'] = $userInfo->name;
    $_SESSION['email'] = $userInfo->email;
    $_SESSION['picture'] = $userInfo->picture;

    header('Location: logado.php');

}else{
    exit("Erro #2: Token de acesso inválido");
}


?>