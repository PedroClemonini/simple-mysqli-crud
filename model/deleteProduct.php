<?php

include_once '../factory/conexao.php';
$id = $_GET['id'];
$query = "delete from tb_product where id ='$id'";

$execute = mysqli_query($conn,$query);
if($execute){
  echo 'Produto apagado com sucesso';
  return;
}
echo 'Falha ao apagar';


?>

<a href="../index.php">Voltar</a>
