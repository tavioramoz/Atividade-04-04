<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home_style.css">
    <title>Aluno</title>
</head>
<body>
<?php
    include_once('header.html')
    ?>
    <div class="conteudo">
        <p id="titulo"><b>Login do<br> Aluno</b> </p>
        <form action="cadaluno.php" method="post">
        <div class="space">
        <p> <br> <input type="text" name="CPF" placeholder="CPF" required></p>
        <p> <br> <input type="text" name="Senha" placeholder="Senha" required></p>
        </div>

        <button type="submit" value="login">
            <p id="botao1">Login</p>
        </button>
        <br>
        <br>
        
        <a href="cadaluno.php">Não tenho Cadastro</a>
    </form>
    </div>
    <?php
    include_once('footer.html')
    ?>
</body>
</html>