<?php

    include_once("config/url.php");
    include_once("config/process.php");


    if (isset($_SESSION['msg'])){
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = '';

    }
 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Agenda</title>
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
   <link rel="stylesheet" href="../css/style.css">

</head>
<body>
   <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
         <a class="navbar-brand" href="<?= $BASE_URL ?>/index.php">
            <img src="<?= $BASE_URL ?>img/logo.svg" alt="Logo Agenda">
         </a>
         <div>
            <div class="navbar-nav">
               <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>/index.php">Agenda</a>
               <a class="nav-link active" href="<?= $BASE_URL ?>/create.php">Adicionar Contato</a>
            </div>
         </div>
      </nav>
   </header>