<!DOCTYPE html>
<html lang="es"> 
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Ejemplo de HTML5">
        <meta name="keywords" content="HTML5, CSS3, JavaScript">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ci | Login administración</title>
        <link rel="stylesheet" href="../css/stylessAdmins.css">
        <link href="../../img/cicon.png" rel="shortcut icon">
    </head> 
    <body style="text-align: center;">
    <ul>
        <h1 id="titulo">ENGLISH GROUP FINDER</h1>
        <img id="ci" src="../../img/logo.png">
        <img id="utt" src="../../img/utteclogo.png">
    </ul>
<div id="inicio">
    <header>  
        <h1 id="titulos">Administración</h1>
    </header>
    <form method="POST">
        <?php 
            include("conexion.php");
            include("validar_admin.php");
        ?>
        <p id="subtitulo">Email:</p>
        <p><input type="email" name="email" size="20" id="correo" placeholder="Email"></p>
        <p id="subtitulo">Password:</p>
        <p><input type="password" name="password" size="20" id="pass" placeholder="Password"></p>
        <a ><p><input id="btnAdmin" name="btnIngresar" type="submit" value="Log in"></p></a>
        <a href="../../index.php"><p><input id="btnRegresar" type="button" value="Salir"></p></a>
    </form>
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
    mix-blend-mode: normal;
}
#ci{
    position: absolute;
    width: 229.73px;
    height: 200px;
    left: 10px;
    top: -25px;  
}
#utt{
    position: absolute;
    width: 229.73px;
    right: 300px;
    top: 40px;  
}

@font-face {
    font-family: FuenteCI;
    src: url(../ReachStory.ttf);
}
#titulo{
    font-size: 85px;
    color: black;
    font-family: FuenteCI;
}
#titulos{
    font-size: 55px;
    color: black;
    font-family: FuenteCI;
    font-weight: lighter;
}
#inicio{
    box-sizing: border-box;
position: absolute;
width: 400px;
height: 500px;
left: 570px;
top: 200px;
border-radius: 15px;
background: #FFFFFF;
border: 3px solid #000000;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
#btnAdmin{
    border-radius: 5px;
    background: rgba(255, 199, 0, 0.43);
    width: 100px;
    height: 35px;
    left: -80px;
    font-weight: bold;
    font-size: 20px;
    color:black;
    border: none;
    position: relative;
    border-style: hidden;
    border-bottom: 2px solid grey;
    text-align: center;
}
#btnAdmin:hover{
    background-color: #FFA500;
    color:black;
    cursor: pointer;
}
#btnRegresar{
    border-radius: 5px;
    background: rgba(255, 199, 0, 0.43);
    width: 100px;
    height: 35px;
    left: 80px;
    top: -53px;
    font-weight: bold;
    font-size: 20px;
    color:black;
    border: none;
    position: relative;
    border-style: hidden;
    border-bottom: 2px solid grey;
    text-align: center;
}
#btnRegresar:hover{
    background-color: #FFA500;
    color:black;
    cursor: pointer;
}
#subtitulo{
    font-family: FuenteCI;
    font-size: 35px;
}
#correo,#pass,#btnAdmin,#btnRegresar{
    font-family: cursive;
    position: relative;
    border-style: hidden;
    border-bottom: 2px solid grey;
    text-align: center;
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
  
  #titulo {
    font-size: 45px; 
    transform: translateX(25%);
  }
  
  #inicio {
    width: 300px;
    height: auto;
    left: 50%;
    transform: translateX(-50%);
    top: 110px;
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
  
  #titulo {
    font-size: 60px;
  }
  
  #inicio {
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
  
  #titulo {
    font-size: 85px;
  }
  
  #ci {
    width: 250px;
  }
  
  #utt {
    width: 200px;
    left: 1180px;
  }
  
  #inicio {
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