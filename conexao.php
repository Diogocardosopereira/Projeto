<?php
  $server = "localhost";
  $user = "root";
  $pass = "";
  $dbname = "academi";
  
$conexao=new mysqli($server, $user, $pass, $dbname);
     if(!$conexao){
         die("houve um error".mysqli_connect_error());
         
     }
?>