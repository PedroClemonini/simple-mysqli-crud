<?php
include_once '../factory/conexao.php';
if(isset($_POST['cxname'])){
    $name = $_POST['cxname'];
    $price = $_POST['cxprice'];
    $date = $_POST['cxdate'];

    $query = "insert into tb_products (name,price,exp_date) values ('$name', '$price','$date')";
    $execute = mysqli_query($conn,$query);
    if($execute){
        echo 'Dados inseridos com sucesso';
        return;
    }
    echo 'Falha ao inserir';

}
?>
