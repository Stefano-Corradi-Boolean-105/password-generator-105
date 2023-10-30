<?php

function passwordGenerator($length){
  /*
    1. ciclo in base a $length (con un while che e un contatore)
    2. ad ogni ciclo prendo un valore random di ognuno delle stringhe e lo congateno
    3. mischio la stringa ottenuta e la restituisco
  
  */

  $psw = '';
  $indexChars = 0;

  $listChars = [
      'abcdefghijklmnopqrstuvwxyz',
      'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
      '0123456789',
      '!?&%$<>^+-*/()[]{}@#_='
  ];

  // 1. 
  while(strlen($psw) < $length){
    // alterno le liste dei caratteri
    $listChar = $listChars[$indexChars];
    // 2 . 
    $char = $listChar[rand(0, strlen($listChar) -1)];
    $psw .= $char;
    $indexChars++;
    // se il contatore delle liste dei caratteri è troppo alto lo resetto
    if($indexChars === count($listChars)) $indexChars = 0;
  }

  // 3.
  return str_shuffle($psw );
}