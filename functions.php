<?php

function passwordGenerator($length){
  // mischio la lista dei caratteri
  $listChars = str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!?&%$<>^+-*/()[]{}@#_=');

  // prendo i prii caratteri della lista in base alla lunghezza scelta
  return substr($listChars ,0 ,$length);
}