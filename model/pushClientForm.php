<?php
include_once '../factory/conexao.php';
if(isset($_POST['cxname'])){
    $name = $_POST['cxname'];
    $email = $_POST['cxemail'];
    $pass = $_POST['cxpassword'];

    $query = "insert into tb_user (email,password,name) values ('$email', '$pass','$name')";
    $execute = mysqli_query($conn,$query);
    if($execute){
        echo 'Dados inseridos com sucesso';
        return;
    }
    echo 'Falha ao inserir';

}
?>
