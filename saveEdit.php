<?php
 include_once('conexao.php');

 if(isset($_POST['update']))

 {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha']; 

    $sqlupdate = "UPDATE usuario SET nome='$nome',email='$email',senha='$sennha'
    WHERE id='$ id'";

    $result = $conexao->query($sqlupdate);
}
header('Location: tabeladeUs.php');


?>