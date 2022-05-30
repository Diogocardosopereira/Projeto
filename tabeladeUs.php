<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>pesquisa</title>

  </head>
  <body>
 
  <?php
    include_once('conexao.php');

    $sql = "SELECT * FROM usuario ORDER BY id DESC";
   
    $result = $conexao->query($sql);

    print_r($result);
  
   
  
  
  
  ?>
  
  <div class="container">  
   <div class="row">  
    <div class="col">   
     <h1>alteração de cadastro</h1>
    
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Senha</th>
    </tr>
  </thead>
  <tbody>
   <?php
  while($user_data = mysqli_fetch_assoc($result))
    
  {
     echo "<tr>";
     echo "<td>".$user_data['id']."</td>";
     echo "<td>".$user_data['nome']."</td>";
     echo "<td>".$user_data['email']."</td>";
     echo "<td>".$user_data['senha']."</td>";
    echo "<td width=150px><a href='edite.php?id=$id' class='btn btn-success btn-sm'>Editar</a>
       <a href='#' class='btn btn-danger btn-sm'>Excluir</a>
       
      
       
      </td>";
     echo "</tr>";
   
  
    }


?>
   
  </tbody>
</table>


     <br>
    <a href="index.php" class="btn btn-info">Voltar para o Inicio</a>   
   
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
  </body>
</html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">