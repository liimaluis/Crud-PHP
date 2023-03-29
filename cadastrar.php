<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Pfisica;

if(isset($_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['cep'], $_POST['pessoafisica'])){

    $obPfisica = new Pfisica;

    $obPfisica->nome = $_POST['nome'];
    $obPfisica->email = $_POST['email'];
    $obPfisica->telefone = $_POST['telefone'];
    $obPfisica->cep = $_POST['cep'];
    $obPfisica->pessoafisica = $_POST['pessoafisica'];
    $obPfisica->cadastrar();

    header('location: index.php?status=success');
    exit;

    //echo "<pre>"; print_r($obPfisica); echo "</prev>"; exit;

}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';