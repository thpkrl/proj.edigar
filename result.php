<?php

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
    <h1>Resultado do Desafio</h1>
    <p>
        <?php
            require_once 'post.php';
            require_once 'session.php';
            
            $challenge = ['Pedra','Papel','Tesoura'];
            shuffle($challenge);
            $post = new PosT();
            $session = new Session();
            $game = $post->get('game');
            echo 'Você jogou '.$game.'<br>Eu joguei '.$challenge[0].'.<br>';
            if($challenge[0]==$game)
            {
                echo "Empatamos, vamos jogar denovo!!";
            }
            else if(($challenge[0]=="Pedra"&& $game=="Tesoura")||($challenge[0]=="Papel" && $game=="Pedra")||
            ($challenge[0]=="Tesoura" && $game =="Papel"))
            {
                echo ". Ganhei!!, tente novamente mais tarde";
            }
            else{
                echo ". Droga, você ganhou... Jogamos novamente mais tarde";
            }
            echo "<br><br><br>(Usei a função shuffle, para pegar um resultado aleatório do array, aperte 'F5' para ver que o array troca suas posições)";
            $session->destroy();
        ?>
    </p>
    <form action="index.html">
            <input type="submit" value="Retornar a tela inicial">
    </form>
</body>
</html>