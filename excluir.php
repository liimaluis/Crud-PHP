<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Pfisica;

if(!isset($_GET['id']) or !is_numeric($_GET ['id'])){
    header('location: index.php?status=error');
}

$obPfisica = Pfisica::getPfisica($_GET['id']);
if(!$obPfisica instanceof Pfisica){
    header('location: index.php?status=error');
    exit;
}

if(isset($_POST['excluir'])){

    $obPfisica->excluir();

    header('location: index.php?status=success');
    exit;

}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao.php';