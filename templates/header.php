<?php

  include_once("config/url.php");
  include_once("config/process.php");


  //limpa a mensagem
  if(isset($_SESSION['msg'])){
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Agenda</title>
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo $BASE_URL ?>/css/styles.css" > 
</head>
<body>
 <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
     <a  class="navbar-brand" href="<?php echo $BASE_URL?>index.php">
        <img src="<?php echo $BASE_URL?>img/logo.svg" alt="Agenda">
     </a>
     <div>
        <div class="navbar-nav">
            <a class="nav-link active" id="home-link" href="<?php echo $BASE_URL?>index.php">Agenda</a>
            <a class="nav-link active" id="home-link" href="<?php echo $BASE_URL?>create.php">Adicionar Contato</a>
        </div>
     </div>
    </nav>
 </header>