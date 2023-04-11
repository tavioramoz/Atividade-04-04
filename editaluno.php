<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editaluno_styles.css">
    <title>Editar Dados</title>
</head>

<body>
    <?php
    include_once('header_mostaluno.html')
    ?>
    <div class="principal">
        <p id="titulo"><b>Editar Dados</b> </p>
        <form action="mostraaluno.php" method="post">

            <div class="organizacao">
                <div class="linha1">
                    <p> Nome Completo: <br> <input type="text" name="nome" size="64" value=<?php echo $_POST['nome'] ?> /> </p>
                </div>
            </div>
            <div class="organizacao">
                <div class="linha2">
                    <p> RG: <br> <input type="text" name="RG" size="64" value=<?php echo $_POST['RG'] ?> /> </p>
                </div>

                <p> Orgão de Expedição: <br> <input type="text" name="orgao" size="64" value=<?php echo $_POST['orgao'] ?> /> </p>

                <p> CPF: <br> <input type="text" name="CPF" size="64" value=<?php echo $_POST['CPF'] ?> /> </p>

                <div class="organizacao">
                    <p> Telefone: <br> <input type="text" name="telefone" size="28" value=<?php echo $_POST['telefone'] ?> /> </p>
                    <p> Email: <br> <input type="text" name="Email" size="28" value=<?php echo $_POST['Email'] ?> /> </p>
                </div>
                <div class="organizacao">
                <p> Curso: <br> <input type="text" name="curso" size="28" value=<?php echo $_POST['curso'] ?> /> </p>
                    <p> Número de Matrícula: <br> <input type="text" name="Matricula" size="28" value=<?php echo $_POST['Matricula'] ?> /> </p>
                </div>
                <div class="organizacao">
                    <p> Endereço: <br> <input type="text" name="Endereco" size="28" value=<?php echo $_POST['Endereco'] ?> /> </p>
                    <p> Complemento: <br> <input type="text" name="Complemento" size="28" value=<?php echo $_POST['Complemento'] ?> /> </p>
                </div>
                <div class="organizacao">
                    <p> Bairro: <br> <input type="text" name="Bairro" size="28" value=<?php echo $_POST['Bairro'] ?> /> </p>
                    <p> Município: <br> <input type="text" name="Municipio" size="28" value=<?php echo $_POST['Municipio'] ?> /> </p>
                    <p> CEP: <br> <input type="text" name="CEP" size="28" value=<?php echo $_POST['CEP'] ?> /> </p>
</div>
                    <button type="submit" value="Cadastrar">
                        <p id="botao1">Alterar e Salvar</p>
                    </button>

        </form>
    </div>

    <?php
    include_once('footer.html')
    ?>
</body>

</html>

 

         

              


             
