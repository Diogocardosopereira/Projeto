<?php
   include_once('conexao.php');

   if(isset($_POST['email']) || isset($_POST['senha'])){

    if(strlen($_POST['email']) == 0){
         echo "preencha seu e-mail";
     } else if(strlen($_POST['senha']) == 0){
         echo "preencha sua senha";
     } else {
    
       $email = $conexao->real_escape_string($_POST['email']);
       $senha = $conexao->real_escape_string($_POST['senha']);
       
       $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
       $sql_query = $conexao->query($sql_code) or die("falha na execução do codigo SQL: " . $mysql->error);

       $quantidade = $sql_query->num_rows;

       if($quantidade == 1){

          $usuario = $sql_query->fetch_assoc();
       
          if(!isset($_SESSION)){
             session_start();
          }

          $_SESSION['id'] = $usuario['id'];
          $_SESSION['nome'] = $usuario['nome'];

          header("Location: painel.php");

        } else {
         echo "falha ao logar! E-mail ou senha incorretos";
       }



    }
     
  }



?>


<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>academia</title>
  </head>
  <body>
  <center>
  <div class="container">  
   <div class="row">  
    <div class="col">   
     <div class="tela-login">
    <h1>Acesse sua conta</h1>
       <form action="" method="POST">
      
       <div class="form-group">
     <label for="email">email</label>
     <input type="email" class="form-control" name="email">
    </div>  
    <div class="form-group">
     <label for="nome">senha</label>
     <input type="type" class="form-control" name="senha">
   </div>  
   <div class="form-group">
   <br>
   <input type="submit" name="update" id="update">
   </div>
   <br>
   <a href="cadrasto.php">Ainda não é inscrito?<strong>Cadastre-se!</Cadastre-se></strong></a>
   <br><br/>
   <div>
  </form>
  
  <a href="index.php"  name="update" id="update"> Voltar para o Inicio</a>   

</div>

</center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>
  </body>
</html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
