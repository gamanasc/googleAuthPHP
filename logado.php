<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
</head>
<body>
    <?php 
        session_start();

        if(!isset($_SESSION['name'])){
            header('Location: index.php');
        }
    ?>

    <img src="<?= $_SESSION['picture'] ?>" alt="">
    <h1>Bem vindo, <?= $_SESSION['name'] ?></h1>
    <p><?= $_SESSION['email'] ?></p>
    <a href="logout.php">Sair</a>
</body>
</html>