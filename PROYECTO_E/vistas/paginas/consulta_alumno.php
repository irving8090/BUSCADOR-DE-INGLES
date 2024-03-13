<?php 
        if(!empty($_POST["btnConsultar"])) {
            if(empty($_POST["mat"]) ){
                echo '<div class="alert alert-danger">EL CAMPOS ESTAN VACIOS</div>';
            }else{
                $matricula=$_POST["mat"];
                $consulta=$conexion->query("SELECT * FROM alumno where matricula='$matricula'");
                if ($datos=$consulta->fetch_object()){
                    $matricula=isset($datos["matricula"]);
                    $nombre=$datos["nombre"];
                    $nivel=$datos["nivel"];
                    $espacio=$datos["espacio"];
                    $grupo=$datos["grupo"];
                    $cuatrimestre=$datos["cuatrimestre"];
                    $profesor=$datos["profesor"];
                    $classroom=$datos["classroom"];
                    $oxford=$datos["oxford"];
                    $estatus=$datos["estatus"];
                    $horario=$datos["horario"];
                    $tutor=$datos["tutor"];
                   
                }else{
                    echo '<div class="alert alert-danger">No se pudo consultar no existe</div>';
                        
                }
            }
        }      
        ?>