<?php

// Recebendo os dados enviados pelo formulário
$nome = $_POST["nome1"];
$idade = $_POST["idade2"];
$profissao = $_POST["profissao3"];
$salario = $_POST["salario4"];
$experiencia = $_POST["experiencia5"];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Cadastro Confirmado</title>

</head>

<body>

    <div class="container">

        <h1>Cadastro realizado com sucesso!</h1>

        <h2>Dados cadastrados</h2>

        <p>
            <strong>Nome completo:</strong>
            <?php echo $nome; ?>
        </p>

        <p>
            <strong>Idade:</strong>
            <?php echo $idade; ?> anos
        </p>

        <p>
            <strong>Profissão:</strong>
            <?php echo $profissao; ?>
        </p>

        <p>
            <strong>Salário pretendido:</strong>
            R$ <?php echo number_format($salario, 2, ',', '.'); ?>
        </p>

        <p>
            <strong>Experiência anterior:</strong>
            <?php echo $experiencia; ?>
        </p>

        <h2>Mensagem</h2>

        <p>
            Olá, <?php echo $nome; ?>!
            Recebemos seu cadastro para a profissão de
            <?php echo $profissao; ?>.
            Agradecemos por compartilhar sua experiência:
            <?php echo $experiencia; ?>
        </p>

        <a href="cadastro.html">Voltar para o formulário</a>

    </div>

</body>
