<?php

  if(isset($_SESSION)){
      session_start();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>painel</title>
</head>
<body>
    Bem vindo ao painel, <?php echo $_SESSION['nome']; ?>
</body>
</html>