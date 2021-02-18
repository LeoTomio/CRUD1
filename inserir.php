<?php


require 'Modelo/Pessoa.php';


$classePessoa = new Pessoa();
        
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$endereco = $_POST['endereco'];

$classePessoa->inserir($nome, $idade, $cpf, $telefone, $sexo, $endereco);