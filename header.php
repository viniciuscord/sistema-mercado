<?php 
    // session_start();
    // require('db_class.php');
    // $obj = new Db_Class();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Sistema Mercado</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>
<nav class="navbar navbar-light bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="assets/img/carrinho.jpg" alt="" width="70" height="34" class="d-inline-block align-text-top">MERCADO</a>
  </div>
</nav>
<div class="container-fluid bg-3 text-center">  
  <h3>SISTEMA MERCADO</h3>
  <div class="col-lg-1 col-6 pull-right" style="margin-top: -100px;">
    <div class="small-box bg-info">
      <div class="inner">
        <h3>150</h3>
        <p>Itens</p>
      </div>
      <div class="icon">
        <i class="fas fa-shopping-cart"></i>
      </div>
      <a href="carrinho.php" class="small-box-footer">
        Carrinho <i class="fas fa-arrow-circle-right"></i>
      </a>
      </div>
  </div>
  <?php $href = $_SERVER["REQUEST_URI"] != "/sistema_mercado/index.php" ? "href='index.php'" : '';?>
  <a <?php echo $href;?> class="btn btn-primary pull-left" style='margin-top:-30px' id="btn_lista_produto"><span class="glyphicon glyphicon-home"></span> Início</a>
  <!-- <a class="btn btn-primary pull-left" style='margin-top:-30px' id="btn_lista_produto"><span class="glyphicon glyphicon-home"></span> Início</a> -->
  <!-- <a href="lista_venda.php" class="btn btn-primary pull-left" style='margin-top:-30px;margin-left: 10px;'><span class="glyphicon glyphicon-th-list" id="btn_lista"></span> Lista de Vendas</a> -->
  <a <?php echo $href;?> class="btn btn-primary pull-left" style='margin-top:-30px;margin-left: 10px;' id="btn_lista_venda"><span class="glyphicon glyphicon-th-list"></span> Lista de Vendas</a>
  <a href="insert.php" class="btn btn-warning pull-right" style='margin-top:-30px'><span class="glyphicon glyphicon-plus-sign"></span> Cadastrar Produto</a>
  <a href="venda.php" class="btn btn-info pull-right" style='margin-top:-30px;margin-right: 10px;'><span class="glyphicon glyphicon-usd"></span> Cadastrar Venda</a>
  <!-- <a href="carrinho.php" class="btn btn-primary pull-right" style='margin-top:-30px;margin-right: 10px;'><span class="glyphicon glyphicon-shopping-cart"></span></a> -->
  <br>
  </div>
<?php
include('links.php');
?>
