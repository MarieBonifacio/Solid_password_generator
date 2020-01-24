<?php
session_start();


$string = !empty($_POST['sentence']) ? $_POST['sentence'] : NUll;

function initiales($string)
{
  return preg_replace('#\B\p{L}\p{M}*+|\s+#u', '', $string); 
  //return str_replace(' ', '', preg_replace('#(?!\b)([a-zA-Z])(\b)*#', '$2', $string));
}


if($_POST['sentence'] == NULL){
    header("Location:index.php");
    $_SESSION['error'] = "Merci d'écrire une phrase valide";
    exit;
}elseif(!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\s)(?=.*[!@#$%^&*.,?=+]).*$/", $_POST['sentence'])){
    header("Location:index.php");
    $_SESSION['error'] = "Votre phrase doit contenir au moins une majuscule, un chiffre et un caractère spécial.";
    exit;
}else{
  $_SESSION['string'] = $string;
  $_SESSION['initiales'] = initiales($string);
  header("Location:./index.php");
}

 ?>
