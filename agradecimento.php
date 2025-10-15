<?php

$nomeExibido = '';
if ( !empty(trim($_POST['nome_social'])) ) {
    $nomeSocial = $_POST['nome_social'];
    $arrayNomeSocial = explode(' ', $nomeSocial);
    $nomeExibido = $arrayNomeSocial[0];

} else {
    $nome = $_POST['nome'];
    $arrayNome = explode(' ', $nome);
    $nomeExibido = $arrayNome[0];
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Obrigado por se registrar!</title>
</head>
<body>
    <main>
        <h1>Obrigado por se registrar como doador(a) de medula óssea, <?php echo htmlspecialchars($nomeExibido); ?>!</h1>
        <p>Sua ação pode fazer a diferença na vida de alguém!<br>Se necessário, o Hemominas entrará em contato.</p>
    <main>
</body>
</html>