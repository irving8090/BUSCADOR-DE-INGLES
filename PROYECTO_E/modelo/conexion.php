<?php

class Conexion {

    static public function conectar(){
        #PDO ("nombre del servidor, nombre bd", usuario, password)

        $link = new PDO("mysql:host=localhost;dbname=db_ingles2", "root", "");

        $link->exec("set names utf8");

        return $link;


        try {
            $pdo = new PDO("mysql:host=localhost;dbname=db_ingles2", "root", "");
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
    }
}