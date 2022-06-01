<?php
    if(!empty($_GET['id']))
   {
       include_once('conexao.php');

       $id = $_GET['id'];

       $sqlSelect = "SELECT * FROM usuario WHERE id=$id";

       $result = $conexao->query($sqlSelect);

       if($result->num_rows > 0)
       {
           while($user_date = mysqli_fetch_assoc($result))
           {
               $sqlDelete = "DELETE FROM usuario WHERE id=$id";
               $resultDelete = $conexao->query($sqlDelete);

            }

           }
       
          }

    header('Location: sistema.php');
?>