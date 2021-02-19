<?php

require './Modelo/Pessoa.php';

$callClass = new Pessoa();

$codigo = $_GET['codigo'];

$callClass->deletar($codigo);
header('location: index.php');