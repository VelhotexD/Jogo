<?php
session_start();
require_once('model.php');


if($_SERVER['REQUEST_METHOD'] == 'GET'){

    $_SESSION['number'] = numb_random();

}else{

    $userval = $_POST['number'];
    $res = compraNumero($_SESSION['number'],$userval);

}


include ('view.php');

?>