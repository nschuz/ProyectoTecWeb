<?php
  session_start();
  $email = $_POST["email"];
  $contrasena = $_POST["contrasena"];

  $conexion = mysqli_connect("localhost","root","","proye229_alumno");
  $sqlGetAlumno = "SELECT * FROM datos WHERE email = '$email' AND contrasena = '$contrasena'";
  $resGetAlumno = mysqli_query($conexion,$sqlGetAlumno);
  $infGetAlumno = mysqli_fetch_row($resGetAlumno);
  $respAX = [];
  if(mysqli_num_rows($resGetAlumno) == 1){
    $_SESSION["email"] = $email;
    $respAX["cod"] = 1;
    $respAX["msj"] = "Gracias :) ".$infGetAlumno[1]." Bienvenido!!!";
  }else{
    $respAX["cod"] = 0;
    $respAX["msj"] = "Error. Favor de intentarlo nuevamente";
  }

  echo json_encode($respAX);
?>