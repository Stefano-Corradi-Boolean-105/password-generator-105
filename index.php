<?php

require_once __DIR__ . '/functions.php';

$min = 8;
$max = 32;
$message = "Scegliere una password con almeno $min  caratteri e massimo  $max  caratteri";
$css_alert = 'success';

// controllo che arrivi il valore in post e che non sia una stringa vuata
if(isset($_POST['pswlen']) && !empty($_POST['pswlen'])){
  
  $pswlen = $_POST['pswlen'];

  // controllo se il valore inserito è corretto
  if($pswlen < $min || $pswlen > $max){
    $message = "Errore! Il valore inserito deve essere compreso fra $min e $max";
    $css_alert = 'danger';
  }else{

    
    // apro la sessione
    session_start();

    // creo la laviabile di sessione da inviare a success-page.php
    $_SESSION['password'] = passwordGenerator($pswlen);

    // reindirizzo all alla pagina success-page.php
    header('Location: ./success-page.php');

  }

}

require_once __DIR__ . '/partials/head.php';

?>



<body>

<div class="sc-container">

    <div class="container-fluid my-5">
      <h1 class="text-center">Password generator</h1>
      <div class="alert alert-<?php echo $css_alert ?> my-3 " role="alert">
        <?php echo $message ?>
      </div>

      <div class="bg-white text-dark rounded-1 p-3">

        <form action="index.php" method="POST">
          <div class="row">
            <div class="col-9">
              <p>Lunghezza password:</p>
            </div>
            <div class="col">
              <input type="number" name="pswlen" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-auto">
              <button class="btn btn-primary " type="submit">Invia</button>
            </div>
            <div class="col-auto">
              <button class="btn btn-secondary " type="reset">Reset</button>
            </div>
          </div>
        </form>

      </div>

    </div>

</div>

  


  
  
</body>
</html>