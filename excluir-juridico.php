<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Pjuridica;

if(!isset($_GET['id']) or !is_numeric($_GET ['id'])){
    header('location: index.php?status=error');
}

$obPjuridica = Pjuridica::getPjuridica($_GET['id']);
if(!$obPjuridica instanceof Pjuridica){
    header('location: index.php?status=error');
    exit;
}

if(isset($_POST['excluir'])){

    $obPjuridica->excluir();

    header('location: index.php?status=success');
    exit;

}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao.php';