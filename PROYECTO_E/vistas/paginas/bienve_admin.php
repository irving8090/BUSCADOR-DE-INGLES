<?php 
include ('validar_admin.php');
session_start();
if (!isset($_SESSION['email'])) {
  
  echo "<script>alert('Acceso denegado');</script>";
  
  echo "<script>window.location.href = '../../index.php';</script>";
  exit(); 
}
$email = $_SESSION['email'];
session_destroy();

?>
<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ejemplo de HTML5">
    <meta name="keywords" content="HTML5, CSS3, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ci | Inicio administración</title>
    <link rel="stylesheet" href="../css/stylesBadmin.css">
    <link href="../../img/cicon.png" rel="shortcut icon">
</head> 
<body style="text-align: center;">
    <ul>
        <h1 id="titulos">ENGLISH GROUP FINDER</h1>
        <img id="ci" src="../../img/logo.png">
        <img id="utt" src="../../img/utteclogo.png">
    </ul>
    
    <div id="datos">
        <br>
        <form action="guardar_datos.php" method="POST" enctype="multipart/form-data">
            <p id="lblopcion">Suba el archivo:</p>
            <label for="file-upload" class="subir">
                <i class="fas fa-cloud-upload-alt"></i> Subir archivo
            </label>
            <input id="file-upload" name="archivo" type="file" style="display: none;" accept=".csv"/>
            <div id="info"></div>
            <input id="Enviar" type="submit" value="Enviar">
        </form>
        <br>
        <a href="../../index.php"><p><input id="btnSalir" type="button" value="Salir"></p></a>
    </div>
</body>
</html>
    
<style>
 @font-face {
    font-family: FuenteCI;
    src: url(../ReachStory.ttf);
}
  #Enviar{
    border-radius: 5px;
  }
  .subir{
    padding: 5px 10px;
    background: #f55d3e;
    color:#fff;
    border:0px solid #fff;
    font-family: Cursive;
    font-size: 20px;
    border-radius: 5px;
}
 
.subir:hover{
    color:#fff;
    background: #f7cb15;
    font-family: Cursive;
    font-size: 20px;
    border-radius: 5px;
}
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
    width: 600px;
    height: 380px;
    left: 500px;
    top: 180px;
    border-radius: 15px;
    background: #FFFFFF;
    border: 3px solid #000000;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
#titulos{
  font-size: 80px;
    color: black;
    font-family: FuenteCI;
}
body{
    background-color: #F1F1F1;
}
#izquierda{
    padding-top: 10px;
    padding-right: 30px;
    margin-right: 30px;
    position: relative;
    float: center;
    width: 60%;
    height: auto;
    font-family: Sans-serif;
    font-size: 10px;
    font-weight: lighter;
    text-align: center;
}
#btnSalir{
    border-radius: 5px;
    background-color: #FF603B;
    width: 200px;
    height: 35px;
    font-weight: bold;
    font-size: 20px;
    color: black;
    border:none;
    border-bottom: 2px solid grey;
} #btnSalir:hover{
    background-color: rgb(255, 231, 113);
    color:#FF603B;
    cursor: pointer;
}
#lblopcion{
  font-family: FuenteCI;
    font-size: 50px;
    color:black;
    text-shadow: rgb(255, 233, 63) 6px 1px 1px;
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
    width:190%;
    height: 15%;
    transform: translateX(-50%); 
  }
  #titulos {
    font-size: 45px; 
    transform: translateX(25%);
    font-family: FuenteCI;
  }
  
  #datos {
    width: 300px;
    height: auto;
    left: 50%;
    transform: translateX(-50%);
  }
  
  #btnINGLES {
    width: 90%;
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
  
  #titulos {
    font-size: 60px;
    font-family: FuenteCI;
  }
  
  #datos {
    width: 500px;
    height: 550px;
    left: 50%;
    transform: translateX(-50%);
  }
  
  #btnINGLES {
    width: 70%;
  }
}

@media screen and (min-width: 1025px) {
  /* Styles for screens larger than 1024px */
  body {
    font-size: 18px;
  }
  
  #titulos {
    font-size: 85px;
    font-family: FuenteCI;
  }
  
  #ci {
    width: 250px;
  }
  
  #utt {
    width: 200px;
    left: 1180px;
  }
  
  #datos {
    width: 400px;
    height: auto;
    left: 50%;
    transform: translateX(-50%);
  }
  
  #btnINGLES {
    width: 50%;
  }
}
</style>