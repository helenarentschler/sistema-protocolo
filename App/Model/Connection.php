<?php

class Connection {

    #guarda instancia de PDO
    private static $instance;

    public static function getConn() {
        #se nao houver instancia PDO
        if(!isset(self::$instance)) {
            try {
                #cria instancia da classe PDO com infos do banco, gerando objeto responsavel pela conexao
                self::$instance = new \PDO("mysql:host=localhost;dbname=sistema_protocolo;charset=utf8", "root", "root");
            } catch (PDOException $e) {
                echo 'ERRO: ' . $e->getMessage();
            }
        }
        return self::$instance;
    }
}