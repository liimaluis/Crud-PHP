<?php

 require __DIR__.'/vendor/autoload.php';

use \App\Entity\Pfisica;
use \App\Entity\Pjuridica;

$pfisicas = Pfisica::getPfisicas();
$pjuridicas = Pjuridica::getPjuridicas();

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem.php';
include __DIR__.'/includes/listagem-juridica.php';