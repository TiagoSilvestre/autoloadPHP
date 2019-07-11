<?php

require './vendor/autoload.php';

// nome completo da class
$pessoa = new \App\Controller\Pessoa();
$pessoa->falar();

$animal = new \App\Controller\Animal();
$animal->emitirSom();


$db = new \Src\Database();
$db->conectar();