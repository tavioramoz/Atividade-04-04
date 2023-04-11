<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mostraluno_styles.css">
    <title>Mostrar Dados</title>
</head>

<body>
    <?php
    include_once('header_mostaluno.html')
    ?>
    <b>
        <div class="tabela">

            <table>
                <tr>
                    <td class="negrito">
                        <?php
                        echo "Nome";
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $_POST['nome'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="negrito">
                        <?php
                        echo "RG";
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $_POST['RG'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="negrito">
                        <?php
                        echo "Orgão expedidor";
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $_POST['orgao'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        echo "CPF:";
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $_POST['CPF'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="negrito">
                        <?php
                        echo "Telefone";
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $_POST['telefone'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="negrito">
                        <?php
                        echo "E-mail";
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $_POST['Email'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="negrito">
                        <?php
                        echo "Curso";
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $_POST['curso'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="negrito">
                        <?php
                        echo "Matricula";
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $_POST['Matricula'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="negrito">
                        <?php
                        echo "Endereço";
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $_POST['Endereco'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="negrito">
                        <?php
                        echo "Complemento";
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $_POST['Complemento'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="negrito">
                        <?php
                        echo "Bairro";
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $_POST['Bairro'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="negrito">
                        <?php
                        echo "Município";
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $_POST['Municipio'];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="negrito">
                        <?php
                        echo "CEP";
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $_POST['CEP'];
                        ?>
                    </td>
                </tr>
            </table>
            <br>

        </div>

        <form action="editaluno.php" method="post">
            <input type="hidden" name="nome" value="<?php echo $_POST['nome']; ?>">
            <input type="hidden" name="RG" value="<?php echo $_POST['RG']; ?>">
            <input type="hidden" name="orgao" value="<?php echo $_POST['orgao']; ?>">
            <input type="hidden" name="CPF" value="<?php echo $_POST['CPF']; ?>">
            <input type="hidden" name="telefone" value="<?php echo $_POST['telefone']; ?>">
            <input type="hidden" name="Email" value="<?php echo $_POST['Email']; ?>">
            <input type="hidden" name="curso" value="<?php echo $_POST['curso']; ?>">
            <input type="hidden" name="Matricula" value="<?php echo $_POST['Matricula']; ?>">
            <input type="hidden" name="Endereco" value="<?php echo $_POST['Endereco']; ?>">
            <input type="hidden" name="Complemento" value="<?php echo $_POST['Complemento']; ?>">
            <input type="hidden" name="Bairro" value="<?php echo $_POST['Bairro']; ?>">
            <input type="hidden" name="Municipio" value="<?php echo $_POST['Municipio']; ?>">
            <input type="hidden" name="CEP" value="<?php echo $_POST['CEP']; ?>">

            <button type="submit" value="Editar">
                <p id="botao1">Editar</p>
            </button>
        </form>


        <?php
        include_once('footer.html')
        ?>

</body>

</html>