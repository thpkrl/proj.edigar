<?php
    require_once 'session.php';
    $session = new Session();
    $user = $session->get('user');
    $email = $session->get('email');
    $cpf = $session->get('cpf');
    $link = $session->get('link');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HOME</h1>
    <h3><?php echo "Bem vindo ".$user?></h3>
    <p><?php echo "Seu Email ".$email?></p>
    <p><?php echo "Seu CPF ".$cpf?></p>
    <img src="<?php echo $link ?>" alt="" width="300">
    <br><br>
    <h2>bora zoar?</h2>
    <p><?php echo $user.' bora jogar jokem-po? Escolha uma das opções e veja se consegue me derrotar' ?></p>
    <form action="result.php" method="post">
        <select name="game">
            <option>Pedra</option>
            <option>Papel</option>
            <option>Tesoura</option>
            <input type="submit" value="Jogar">
        </select>
    </form>
    
</body>
</html>