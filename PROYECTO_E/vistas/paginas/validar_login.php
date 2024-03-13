<?php

if(!empty($_POST["btnIngresar"])) {
    if(empty($_POST["matricula"])){
        class MiExcepción extends Exception { }
        class Prueba {
            public function probar() {
                try {
                    try {
                        throw new MiExcepción('Los campos estan vacios');
                    } catch (MiExcepción $e) {
                        
                        throw $e;
                    }
                } catch (Exception $e) {
                    var_export($e->getMessage());
                }
            }
        }
        $foo = new Prueba;
        $foo->probar();
    }else{
        
            $matricula=$_POST["matricula"];
            $sql=$conexion->query("SELECT * FROM alumno where matricula='$matricula'");
            
            if ($datos=$sql->fetch_object()){
                session_start();
                $_SESSION['matri']=$matricula;
                
                header("location:vistas/paginas/datos_alumno.php");
    
            }else{
                class MiExcepción extends Exception { }
        class Prueba {
            public function probar() {
                try {
                    try {
                        throw new MiExcepción('<div id="alerta" class="alert alert-danger" style="font-family:cursive; color:red; font-weight:bold;"><a href="https://forms.gle/q54V85MgMpRZUmKS9"><p><input type="button" id="btnForm" value="Asignación pendiente, 
                        solicitalo aquí y llena el formulario"></p></a></div>');
                    } catch (MiExcepción $e) {
                        
                        throw $e;
                    }
                } catch (Exception $e) {
                    var_export($e->getMessage());
                }
            }
        }
        $foo = new Prueba;
        $foo->probar();
                
            }
    }
}    
 ?>
 <!DOCTYPE html>
<html lang="es">    
    <style>
    #btnForm{
    border-radius: 5px;
    background: #ff4040;
    width: 350px;
    height: 60px;
    font-weight: bold;
    font-size: 20px;
    color:white;
    border: none;
    font-family: cursive;
    position: relative;
    border-style: hidden;
    border-bottom: 2px solid grey;
    text-align: center;
    left: 10px;
    top: 10px;
}                                                                                                                                                   </style>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           

     