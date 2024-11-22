<?php
include 'contador.php';  // incluindo arquivo com a função do contador
$contadorAtual = incrementarContador();  // chamando a função e armazenando o valor
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contador de Acessos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contador-container">
        <h1>Contador de Acessos em PHP</h1>
        <p>Esta página já foi acessada <span><?php echo $contadorAtual; ?></span> vezes.</p>
    </div>
</body>
</html>
