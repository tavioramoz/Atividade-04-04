<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadaluno-styles.css">
    <title>Cadastro</title>
</head>
<body>
<?php
    include_once('header_cadaluno.html')
    ?>
    <div class="principal">
        <p id="titulo"><b>Cadastro</b> </p>

        <form action="mostraaluno.php" method="post">
        
        <div class="organizacao">
        <div class="linha1"> <p>Nome Completo: <br> <input id="maior" type="text" name="nome"></p></div>
        </div>

        <div class="organizacao">
        <div class="linha2"> <p>RG: <br> <input id="medio" type="text" name="RG" required></p>
        </div>
        
        <p>Orgão de Expedição: <br> <select id="menor" name="orgao" >
            <option value="SSP-BA">SSP-BA</option>
            <option value="Cartorio">Cartório Civil</option>
            <option value="PF">Policia Federal</option>
            </select>

        <p>CPF: <br> <input id="medio" type="number" name="CPF" required></p>
        
        
        <div class="organizacao">
        <p>Telefone de Contato: <br> <input id="medio" type="text" name="telefone"></p>
        <p>Email: <br> <input id="terco" type="text" name="Email"></p>
        </div>

        <div class="organizacao">
            <p>Curso: <br> <select name="curso" id="curso">
            <option value="Informática para a Internet">Informática para a Internet</option>
            <option value="Agropecuária">Agropecuária</option>
            <option value="Análise e Desenvolvimento de Sistemas">Análise e Desenvolvimento de Sistemas</option>
            <option value="Agroindustria">Agroindustria</option>
        </select>
        
        <p>Número de Matrícula: <br> <input id="medio" type="text" name="Matricula"></p> 
        </div>

        <div class="organizacao">
        <p>Endereço: <br> <input id="terco" type="text" name="Endereco"></p>
        <p>Complemento: <br> <input id="medio" type="text" name="Complemento"></p>
        </div>

        <div class="organizacao"> 
        <p>Bairro: <br> <input id="medio" type="text" name="Bairro"></p>
        <p>Município: <br> <input id="medio" type="text" name="Municipio"></p>
        <p>CEP: <br> <input id="medio" type="text" name="CEP"></p>
    </div>

        <button type="submit" value="Cadastrar">
            <p id="botao1">Cadastrar</p>
        </button>
       
    </form>
    </div>
    <?php
    include_once('footer.html')
    ?>
</body>
</html>