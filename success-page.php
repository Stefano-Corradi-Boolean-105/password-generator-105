<?php

 // apro la sessione per poter accedere alla variabile di dessione
 session_start();

 // controllo che la variabile in sessione esista
 if(isset($_SESSION['password'])){
  $password = $_SESSION['password'];
 }else{
  // se non esiste reindirizzo alla pagina index.php
  header('Location: ./index.php');
 }

 // leggo la variabile di sessione che ho impostatato
 

require_once __DIR__ . '/partials/head.php';
?>

<body>

<div class="sc-container">

    <div class="container-fluid my-5">
    <h1 class="text-center">Password generator</h1>
    <div class="alert alert-primary" role="alert">
      La passwrod generata è: <strong><?php echo $password ?></strong>
    </div>

    <a href="index.php" class="btn btn-primary ">Genera un'altra password</a>

    </div>

</div>


</body>
</html>