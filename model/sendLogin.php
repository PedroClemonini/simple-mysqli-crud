<?php
include_once '../factory/conexao.php';
if(isset($_POST['cxemail'])){
    session_start();
    $email = $_POST['cxemail'];
    $pass = $_POST['cxpassword'];

    $query = "select * from tb_user where email = '$email' and password = '$pass'";
    $execute = mysqli_query($conn,$query);
    if(mysqli_num_rows($execute) >0){
        echo 'Usuário conectado';
        $_SESSION['login'] = $email;
        $_SESSION['senha'] = $pass;
        
        echo "
        <script>
          alert('Seja vem Vindo!');
          window.location.href = 'menu.php';
        </script>
        ";
  
    } else{
      unset($_SESSION['login']);
      unset($_SESSION['senha']);
      echo "
        <script>
          alert('Usuario ou senha incorreto!');
          window.location.href = '../view/login.html';
        </script>
        ";
    }
}
?>
