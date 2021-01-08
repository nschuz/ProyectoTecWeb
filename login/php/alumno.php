<?php
  session_start();
  if(isset($_SESSION["email"])){
    $email = $_SESSION["email"];
    $conexion = mysqli_connect("localhost","root","","proye229_alumno");
    $sqlInfAlumno = "SELECT * FROM datos WHERE email = '$email'";
    $resInfAlumno = mysqli_query($conexion, $sqlInfAlumno);
    $infAlumno = mysqli_fetch_row($resInfAlumno);

    echo "$infAlumno[0] $infAlumno[1] $infAlumno[2] $infAlumno[3]";
    echo "<br>";

  echo "<a href='./cerrarSesion.php?nombreSesion=email'>Cerrar Sesi&oacute;n</a>";

  }else{
    header("location:./../login.html");
  }

  
?>