<!doctype html>
<html lang="pt-br">
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
       if(!empty($_GET['search']))
      
       {
     $data = $_GET['search'];
     $sql = "SELECT * FROM usuario WHERE id LIKE '%data%' or nome LIKE '%data%' or email LIKE '%data%' ORDER BY id DESC";
    }
    else
    {
      $sql = "SELECT * FROM usuario ORDER BY id DESC";
    }
      
        
    $result = $conexao->query($sql);

  
  ?>
  <style>

    .box-search{
      display: flex;
      justify-content: center;
      gap: 1%;
    }
  </style>

  <div class="container">  
   <div class="row">  
    <div class="col">   
     <h1>Alteração de cadastro</h1>
    

     <div class="box-search">
       <input type="search" class="form-control w-25" placeholder="Pesquisar" id="Pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
         <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
        </button>

     </div>
  
  
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
          <a class='btn btn-sm btn-primary' href='edite.php? id=$user_data[id]'>Editar</a>             
      <a a class='btn btn-sm btn-danger' href='delete.php? id=$user_data[id]' data-toggle='modal' data-target='#modal_confirma'>Excluir</a>
      </td>";
     echo "</tr>";
   
  
    }


?>
   
  </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="modal_confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">confirmar para excluir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p>Deseja excluir usuario</p>
       <p id="nome_pessoa">nome da pessoa</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
        <button type="button" class="btn btn-danger">Sim</button>
      </div>
    </div>
  </div>
</div>


     <br>
    <a href="index.php"  name="update" id="update">Voltar para o Inicio</a>   
   
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
  </body>
  <script>
    var search = document.getElementById('Pesquisar');
    
    search.addEventListener ("keydown", function(event) {
      if(event.key === "Enter")
    {
      searchData();
    }
    
  });

    function searchData()
      
    {
      window.location = 'tabeladeUs.php?search='+search.value;
    }
  </script>
</html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">