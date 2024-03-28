<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../view/css/style.css">
  <title>Menu</title>
</head>
<?php
session_start();
$logado = $_SESSION['login'];
if(isset($logado)) {
  
?>
<body>
<nav>
    <div class="back-button">
      <a href="menu.php" class="back-link"></a>
    </div>
    <header> Menu </header>
  </nav>

  
  <section class= "flex">

  <button id="list-button"><a href="../view/clientsearch.html">pesquisar Usuários</a> </button>
  
  <button id="list-button"><a href="../view/productsearch.html">pesquisar Produtos</a> </button>
  
  <button id="list-button"><a href="../model/listProducts.php">Listar Produtos</a> </button>

  <button id="list-button"><a href="../model/listClients.php">Listar Usuários</a> </button>

  <button id="list-button"><a href="../view/userform.html">Inserir novos usuários</a> </button>

  <button id="list-button"><a href="../view/productform.html">Inserir novos produtos</a> </button>

  <button id="list-button"><a href="../model/logout.php">Sair</a> </button>

  
  </section>


  
</body>
</html>

<?php
} else{
  header('Location:../view/login.html');
}?>
