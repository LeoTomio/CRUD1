<?php

class Conexao {

    public static $con;

    public function __construct() {
        $this->conexao();
    }

    public function _destruct() {
        $this->desconecta();
    }
    
    public static function desconecta() {
        self::$con = null;
    }


    public static function conexao() {

        try {
            self::$con = new PDO('mysql:host=localhost;dbname=cadastro;', 'root', '');
            self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$con->exec("SET NAMES 'utf8';");
            return self::$con;
        } catch (PDOException $e) {
            echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
        }
    }

}
