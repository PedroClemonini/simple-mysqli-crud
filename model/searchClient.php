<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../view/css/style.css">
  <title>Pesquisa de usuários</title>
</head>

<body>
<nav>
    <div class="back-button">
      <a href="../index.php" class="back-link"></a>
    </div>
    <header> Pesquisa de usuários cadastrados </header>
  </nav> 
 
<section class="info-list">
<?php
session_start();
$logado = $_SESSION['login'];
if(isset($logado)) {
  

include_once '../factory/conexao.php';
    $name = $_POST['cxname'];
    $query = "SELECT * FROM tb_user WHERE name = '$name'";
    $execute = mysqli_query($conn,$query);

    while($linha = mysqli_fetch_array($execute)){
    ?>
    <form class="list-form">
  
    <label for="cxname">Nome:</label>
    <input type="text" id="cxname" name="cxname" value="<?=$linha['name']?>" >
    
    <label for="cxemail">E-mail:</label>
    <input type="text" id="cxemail" name="cxemail" value="<?=$linha['email']?>">
    
    <label for="cxpassword">Senha:</label>
    <input type="text" id="cxpassword" name="cxpassword" value="<?=$linha['password']?>">
    
    
</form>
</section>
<?php
}}else{
  header("location: ../view/login.html");
}?>

