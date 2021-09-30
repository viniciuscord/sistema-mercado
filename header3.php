
<?php 
    // session_start();
    // require('db_class.php');
    // $obj = new Db_Class();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>PHP PostgreSQL OOPS CRUD Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">                      
      </button>
      <a class="navbar-brand" href="index.php">MERCADO</a>
    </div>
    <div class="collapse navbar-collapse" id="mercadoNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Início</a></li>        
      </ul>       
    </div>
  </div>
</nav>
<?php
include('links.php');
?>