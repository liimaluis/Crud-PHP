<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Pjuridica;

if(isset($_POST['nomeempresa'], $_POST['responsavel'], $_POST['cnpj'], $_POST['cep'], 
$_POST['email'], $_POST['telefone'], $_POST['pessoajuridica'])){

    $obPjuridica = new Pjuridica;

    $obPjuridica->nomeempresa = $_POST['nomeempresa'];
    $obPjuridica->responsavel = $_POST['responsavel'];
    $obPjuridica->cnpj = $_POST['cnpj'];
    $obPjuridica->cep = $_POST['cep'];
    $obPjuridica->email = $_POST['email'];
    $obPjuridica->telefone = $_POST['telefone'];
    $obPjuridica->pessoajuridica = $_POST['pessoajuridica'];
    $obPjuridica->cadastrar();

    header('location: index.php?status=success');
    exit;

}
include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario-juridico.php';