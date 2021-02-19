<?php

require 'Conexao.php';

class Pessoa extends Conexao {

    public function inserir($nome, $idade, $cpf, $telefone, $sexo, $endereco) {

        $sql = "insert into usuario (nome, idade, cpf, telefone, sexo, endereco) values (?, ?, ?, ?, ?, ?);";
        $con = self::conexao()->prepare($sql);
        $con->bindValue(1, $nome);
        $con->bindValue(2, $idade);
        $con->bindValue(3, $cpf);
        $con->bindValue(4, $telefone);
        $con->bindValue(5, $sexo);
        $con->bindValue(6, $endereco);

        $con->execute();
    }

    public function alterar($nome, $idade, $cpf, $telefone, $sexo, $endereco, $codigo) {

        $sql = "UPDATE usuario SET nome=?, idade=?, cpf=?, telefone=?, sexo=?, endereco=? where codigo =?;";
        $c = self::conexao()->prepare($sql);
        $c->bindValue(1, $nome);
        $c->bindValue(2, $idade);
        $c->bindValue(3, $cpf);
        $c->bindValue(4, $telefone);
        $c->bindValue(5, $sexo);
        $c->bindValue(6, $endereco);
        $c->bindValue(7, $codigo);

        $c->execute();
    }

    public function deletar($codigo) {

        $sql = "DELETE from usuario where codigo =?;";
        $c = self::conexao()->prepare($sql);
        $c->bindValue(1, $codigo);
        $c->execute();
    }

    public function ler() {

        $sql = "Select * from usuario;";
        $c = self::conexao()->query($sql);
        $resposta = $c->fetchAll(PDO::FETCH_ASSOC);
        return $resposta;
        
        
    }

}
