<?php

include_once '../factory/conexao.php';
$id = $_GET['id'];
$query = "delete from tb_user where id ='$id'";

$execute = mysqli_query($conn,$query);
if($execute){
  echo 'Usuário apagado com sucesso';
  return;
}
echo 'Falha ao apagar';


?>

<a href="../index.php">Voltar</a>
