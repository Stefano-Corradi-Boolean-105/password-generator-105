<?php

$min = 8;
$max = 32;
$message = "Scegliere una password con almeno $min  caratteri e massimo  $max  caratteri";
$css_alert = 'success';
$password = '';

// controllo che arrivi il valore in post e che non sia una stringa vuata
if(isset($_POST['pswlen']) && !empty($_POST['pswlen'])){
  
  $pswlen = $_POST['pswlen'];

  // controllo se il valore inserito è corretto
  if($pswlen < $min || $pswlen > $max){
    $message = "Errore! Il valore inserito deve essere compreso fra $min e $max";
    $css_alert = 'danger';
  }else{
    // il valore è corretto e genero la pasword

    // mischio la lista dei caratteri
    $listChars = str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?&%$<>^+-*/()[]{}@#_=');

    // prendo i prii caratteri della lista in base alla lunghezza scelta
    $password = substr($listChars,0,$pswlen);
    
    $message = "Password generata: <strong>$password</strong>";
    $css_alert = 'warning';

    // faccio un ciclo in base alla lunghezza inserita. 
    // for($i = 0; $i < $pswlen; $i++){
    //   // ad ogni ciclo estracco un valore random dalla lista dei caratteri
    //   $index_random = rand(0, strlen($listChars) - 1);
    //   $char = $listChars[$index_random];
    //   // concateno il carattere alla stringa della password
    //   $password .= $char;

    //   $message = "Password generata: <strong>$password</strong>";
    //   $css_alert = 'warning';
    // }
  }

}





?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>

  <link rel="stylesheet" href="style.css">

  <title>Password generator</title>
</head>
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