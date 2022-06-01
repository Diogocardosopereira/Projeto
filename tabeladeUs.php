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

  
  ?>
  
  <div class="container">  
   <div class="row">  
    <div class="col">   
     <h1>alteração de cadastro</h1>
    
  <div class="m-5">
     <table class="table table-hover  table text-white table-bg">
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
     echo "<td>
          <a class='btn btn-sm btn-primary' href='edite.php? id=$user_data[id]'>
          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pen-fill' viewBox='0 0 16 16'>
          <path d='m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z'/>
        </svg>
      </a>             
     </td>";
     echo "</tr>";
   
  
    }


?>
   
  </tbody>
</table>


     <br>
    <a href="index.php"  name="update" id="update">Voltar para o Inicio</a>   
   
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
  </body>
</html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">