


<?php
  
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    die("você não pode acessar esta pagina porque não esta logado por favo faça login novamente.<p><a href=\"index.php\">Faça login</a></p>");
}
?>

