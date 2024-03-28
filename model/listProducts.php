<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../view/css/style.css">
  <title>Listagem de Produtos</title>
</head>

<body>

  <nav>
    <div class="back-button">
      <a href="menu.php" class="back-link"></a>
    </div>
    <header> Lista de Produtos cadastrados </header>
  </nav>

  <section class="info-list">


    <?php
    session_start();
    $logado = $_SESSION['login'];
    if (isset($logado)) {

      include_once '../factory/conexao.php';

      $query = "SELECT * FROM tb_products";
      $execute = mysqli_query($conn, $query);

      while ($linha = mysqli_fetch_array($execute)) {
    ?>
        <form class="list-form ">
          <label for="cxname">Nome:</label>
          <input type="text" id="cxname" name="cxname" value="<?= $linha['name'] ?>">

          <label for="cxprice">Preço:</label>
          <input type="text" id="cxprice" name="cxprice" value="<?= $linha['price'] ?>">

          <label for="cxexpdate">data de validade:</label>
          <input type="text" id="cxexpdate" name="cxexpdate" value="<?= $linha['exp_date'] ?>">

          <a href="./deleteProduct.php?id=<?= $linha['id'] ?>">X</a>
        </form>
    <?php
      }
    } else {
      header("location: ../view/login.html");
    } ?>

  </section>
