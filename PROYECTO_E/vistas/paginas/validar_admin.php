<?php

if(!empty($_POST["btnIngresar"])) {

    if(empty($_POST["email"]) and empty($_POST["password"])){

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
        
            $email=$_POST["email"];
            $password=$_POST["password"];
            $sql=$conexion->query("SELECT * FROM usuario where email='$email'and password=$password");
            
            if ($datos=$sql->fetch_object()){
                session_start();
                $_SESSION['email']=$email;
                $_SESSION['password']=$password;
                header("location:bienve_admin.php");
    
            }else{
                echo '<div id="alerta" class="alert alert-danger" style="font-family:cursive; color:red; font-weight:bold;">ACCESO DENEGADO</div>';
            }
    }
}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      

        