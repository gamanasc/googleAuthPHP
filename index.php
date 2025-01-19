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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com Google</title>
</head>
<body>
    <a href="">Login com Google</a>
</body>
</html>