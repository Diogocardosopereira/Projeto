<?php
include_once('protect.php'); 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>painel</title>
</head>
<body>

<div class="painel">
Bem vindo ao painel de usuario <?php echo $_SESSION['nome']; ?>

<p>

    <a href="logout.php"  name="update" id="update">Sair</a>
</p>
</body>
</html>