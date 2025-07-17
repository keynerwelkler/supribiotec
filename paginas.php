<?php 
$pg = @$_GET['pg'];
switch($pg){

    case 'sobre';
    require_once 'sobre.php';
    break;

    case 'contato';
    require_once 'contato.php';
    break;

    default:
    require_once 'inicio.php';
    break;
}


?>