<?php
  
  if(!empty($_GET['id']))
  {

    include_once('conexao.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuario WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
   {
     while($user_data = mysqli_fetch_assoc($result))
   {  
     
    $nome = $user_data['nome'];
     $email = $user_data['email'];
     $senha = $user_data['senha'];

   }
  
  }
   else   
     {
    header('Location: tabeladeUs.php');

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
  <br>
  <a href="tabeladeUs.php"  name="update" id="update">Voltar</a>
  <center>
  <div class="container">  
   <div class="row">  
    <div class="col">   
    <div class="tela-login">
    <h1>Cadastro</h1>
       <form method="POST" action="saveEdit.php">
       <div class="form-group">
     <label for="name">nome</label>
     <input type="text" class="form-control" name="nome" value="<?php echo $nome ?>">
    </div>  
       <div class="form-group">
     <label for="email">email</label>
     <input type="email" class="form-control" name="email" value="<?php echo $email ?>">
    </div>  
    <div class="form-group">
     <label for="nome">senha</label>
     <input type="type" class="form-control" name="senha" value="<?php echo $senha ?>">
   </div>   
    <input type="hidden" name="id" value="<?php echo $id?>">
   <br>
    
    <input type="submit" href="index.php" name="update" id="update">
    
   </div>
  <div>
  </form>
  
  
  </div>

</center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
  </body>
</html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

