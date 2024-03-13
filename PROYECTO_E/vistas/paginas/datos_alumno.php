<?php 
session_start();
if (!isset($_SESSION['matri'])) {
  
  echo "<script>alert('Acceso denegado');</script>";
  
  echo "<script>window.location.href = '../../index.php';</script>";
  exit(); 
}
$matri = $_SESSION['matri'];
session_destroy();
?>
<!DOCTYPE html>
<html lang="es"> 
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Ejemplo de HTML5">
        <meta name="keywords" content="HTML5, CSS3, JavaScript">
        <title>Ci | Inicio alumno</title>
        <link rel="stylesheet" href="http://localhost/Inte/css/stylesAlumnos.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../img/cicon.png" rel="shortcut icon">
    </head>
    <body style="text-align: center;">
    <ul>
<h1 id="titulos">ENGLISH GROUP FINDER</h1>
<img id="ci" src="../../img/logo.png">
<img id="utt" src="../../img/utteclogo.png">
</ul>
<div id="datos">
        <header>  
            <h1 id="titulo">¡ B i e n v e n i d o !</h1>
        </header>
        <div>
            <?php
            include ("conexion.php");
            include("validar_login.php");
        $sql=$conexion->query("SELECT * FROM alumno where alumno.matricula='$matri'");

            
         while($datos=$sql->fetch_object()){
                $nombre=$datos->nombre;
                $nivel=$datos->nivel;
                $espacio=$datos->espacio;
                $grupo=$datos->grupo;
                $profesor=$datos->profesor;
                $classroom=$datos->classroom;
                $cuatrimestre=$datos->cuatrimestre;
                $oxford=$datos->oxford;
                $horario=$datos->horario;
                $estatus=$datos->estatus;
                $tutor=$datos->tutor;
            }

        ?>

        
            <b><p><h3 name="matricula" require value="" >MATRICULA: <?php echo $matri ?></h3></p></b>
            <p><h3 name="nombre" size="27">ESTUDIANTE:  <?php echo $nombre ?></h3></p>
            <hr>
            <div id="izquierda">
            <p><h2 name="carrera" size="27">Grupo:  <?php echo $grupo ?></h2></p>
            <p><h2 name="cuatrimestre" size="27">Cuatrimestre actual:  <?php echo $cuatrimestre ?></h2></p>
            <p><h2 name="grupo" size="27">Profesor:  <?php echo $profesor ?></h2></p>
            <p><h2 name="classroom" size="27">Classroom:  <?php echo $classroom  ?></h2></p>
            <p><h2 name="tutor" size="27">Tutor:  <?php echo $tutor  ?></h2></p>
            </div>
            <div id="derecha">
            <p><h2 name="profesor" size="27">Horario:  <?php echo $horario ?></h2></p>
            <p><h2 name="horario" size="27">Espacio:  <?php echo $espacio ?></h2></p>
            <p><h2 name="classroom" size="27">Nivel:  <?php echo $nivel ?></h2></p>
            <p><h2 name="classroom" size="27">Estatus:  <?php echo $estatus ?></h2></p>
            <p><h2 name="classroom" size="27">Oxford Clave:  <?php echo $oxford ?></h2></p>
            </div>
            <form method="POST" action="">
                <br><br>
                <a href="../../index.php"><p><input type="button" id="btnSalir" value="Regresar al inicio"></p></a>
            
        </form>
        </div>
                <br><br>
                <a href="https://drive.google.com/drive/folders/1XEWkDCiimxqc8-5ZDA2V9Wti0AWQzypG"><p><input type="button" id="btnForm" value="Mis datos estan mal"></p></a>
            </div>
        
    </body>
    <style>
        body{
    background-color: #F1F1F1;
}
        ul {
    position: absolute;
    width: 1489px;
    height: 150px;
    left: 0px;
    top: -20px;
    background: rgba(255, 199, 0, 0.43);
}
#ci{
    position: absolute;
    width: 229.73px;
    height: 200px;
    left: 30px;
    top: -25px;  
}
#utt{
    position: absolute;
    width: 229.73px;
    left: 1180px;
    top: 40px;  
}
#datos{
    box-sizing: border-box;
position: absolute;
width: 750px;
left: 400px;
top: 180px;
border-radius: 15px;
background: #FFFFFF;
border: 3px solid #000000;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
#titulo{
    font-size: 60px;
    color: black;
    text-shadow: rgb(255, 233, 63) 6px 1px 1px;
    font-family: FuenteCI;
    font-weight: lighter;
}
#titulos{
    font-size: 80px;
    color: black;
    font-family: FuenteCI;
}
h3{
    font-size: 15px;
    color: black;
    font-family: Sans-serif;
    font-weight: bold;  
}
#izquierda{
    padding-top: 10px;
    padding-right: 10px;
    margin-right: 20px;
    position: relative;
    float: right;
    width: 45%;
    height: auto;
    font-family: Sans-serif;
    font-size: 10px;
    font-weight: lighter;
    text-align: left;
}
#derecha{
    padding-top: 10px;
    padding-left: 10px;
    margin-left: 20px;
    position: relative;
    float: left;
    width: 45%;
    height: auto;
    font-family: Sans-serif;
    font-size: 10px;
    font-weight: lighter;
    text-align: left;
}
#btnSalir{
    border-radius: 5px;
    background: #99ff87 ;
    width: 200px;
    height: 35px;
    font-weight: bold;
    font-size: 20px;
    color:black;
    border: none;
    font-family: cursive;
    position: relative;
    border-style: hidden;
    border-bottom: 2px solid grey;
    text-align: center;
    left: -70px;
    top: relative;
}
#btnForm{
    border-radius: 5px;
    background: #ff4040;
    width: 220px;
    height: 35px;
    font-weight: bold;
    font-size: 20px;
    color:black;
    border: none;
    font-family: cursive;
    position: relative;
    border-style: hidden;
    border-bottom: 2px solid grey;
    text-align: center;
    left: 230px;
    top: 50px;
}#btnForm:hover{
  background-color: darkblue;
  color:lightblue;
  cursor: pointer;
}
hr{
    background-color: rgb(255,192,0);
    height: 4px;
    border-radius: 15px;
    width: 600px;
}
@media screen and (max-width: 768px) {
  /* Styles for screens smaller than 768px */
  body {
    font-size: 14px;
  }
  #utt, #ci{
    display: none;
  }
  ul{
    width:19  0%;
    height: 15%;
    transform: translateX(-50%); 
  }
  hr{
    width: 90%;
    transform: translateX(-0%);
  }
  #titulos {
    font-size: 40px; 
    transform: translateX(25%);
  }
  #titulo {
    font-size: 40px; 
    transform: translateX(0%);
    text-align: center;
  }
  #derecha{
    float: none;
    text-align: center;
    transform: translateX(10%);
    width:200px;
    top: -30px;
  }
  #izquierda{
    float: none;
    text-align: center;
    transform: translateX(25%);
    width:200px;
    top: -5px;
  }
  #datos {
    width: 300px;
    height: 600px;
    left: 50%;
    transform: translateX(-50%);
    top: 110px;
  }
  
  #btnSalir {
    width: 60%;
    transform: translateX(130%);
    top: -80px;
    left: -25%;
  }

  #btnForm {
    width: 70%;
    transform: translateX(-110%);   
    top: -140px;
  }
}

@media screen and (min-width: 769px) and (max-width: 1024px) {
  /* Styles for screens between 769px and 1024px */
  body {
    font-size: 16px;
  }
  
  #ci {
    width: 150px;
  }
  
  #utt {
    width: 100px;
    left: 1050px;
  }
  
  #titulo {
    font-size: 60px;
  }
  
  #datos {
    width: 500px;
    height: 550px;
    left: 50%;
    transform: translateX(-50%);
  }
  
  #btnSalir {
    width: 70%;
  }

  hr{
    width: 200px;
    transform: translateX(10%);
  }
}

@media screen and (min-width: 1025px) {
  /* Styles for screens larger than 1024px */
  body {
    font-size: 18px;
  }
  
  #titulos {
    font-size: 85px;
  }
  
  #ci {
    width: 250px;
  }
  
  #utt {
    width: 200px;
    left: 1180px;
  }
  
  #datos {
    width: 700px;
    height: 480px;
    left: 50%;
    transform: translateX(-50%);
  }
  
  #btnSalir {
    width: 30%;
    transform: translateX(-50%);
    top: 20px;
  }

  #btnForm {
    width: 35%;
    transform: translateX(-50%);
    top: -90px;
  }
}
    </style>