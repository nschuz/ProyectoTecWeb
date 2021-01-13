<?php

//include("conexion_db.php");
//$link = mysqli_connect("localhost","proye229_admon","Omarmoreno1$") or die ("<h2>No se encuentra el servidor</h2>");
//$db = mysqli_select_db("usuarios",$link) or die ("<h2>Error de conexion</h2>");

$conex= mysqli_connect("162.241.62.137","proye229_admon","Omarmoreno1$","proye229_alumno") or die ("Conexion invalida");





    $name= trim($_POST["first_name"]);
    $apaterno= trim($_POST["last_name"]);
    $amaterno= trim($_POST["last_name2"]);
    $curp=strtoupper(trim($_POST["curp"]));
    $sexo=trim($_POST["sexo"]);
    $fecha=date($_POST["fecha"]);
    $email=strtolower(trim($_POST["email"]));
    $contrasena=md5(trim($_POST["contrasena"]));
    $telefono= trim ($_POST["telefono"]);
    $calle= trim($_POST["calle"]);
    $numero= trim($_POST["num_ext"]);
    $colonia=trim($_POST["colonia"]);
    $cp=trim($_POST["codigo_postal"]);
    $municipio=trim($_POST["municipio"]);
    $estado = trim($_POST["estado"]);
    $escuela=trim($_POST["escuela"]);
    $formacion_tecanica=trim($_POST["formacion_tecnica"]);
    $localidad=trim($_POST["localidad"]);
    $promedio=trim($_POST["promedio"]);
    $programa_academico=trim($_POST["programa_academico"]);
    $semestre=trim($_POST["semestre"]);
    $opcion=trim($_POST["opcion"]);

    
    //$consulta="INSERT INTO datos(nombres) VALUES ('$name')";


   $consulta="INSERT INTO datos(nombres, apaterno, amaterno, curp, genero, fecha_nac, email, contrasena, telefono, calle, numero, colonia, alcaldia_municipio, estado, escuela_procedencia, localidad, formacion_tecnica, promedio, carrera_aceptado, semestre, num_opcion) VALUES ('$name', '$apaterno', '$amaterno', '$curp', '$sexo', '$fecha', '$email', '$contrasena', '$telefono', '$calle', '$numero', '$colonia','$municipio', '$estado', '$escuela', '$localidad', '$formacion_tecanica', '$promedio', '$programa_academico', '$semestre', '$opcion')";


    //$consulta="INSERT INTO datos(nombres, apaterno, amaterno, curp, genero, fecha_nac, email, contrasena, telefono, calle, numero, colonia, alcaldia_municipio, estado, escuela_procedencia, localidad, formacion_tecnica, promedio, carrera_aceptado,semestre,num_opcion) VALUES ('$name','$apaterno','$amaterno','$curp','$sexo','$fecha','$email','$contrasena','$telefono','$calle','$numero',$colonia,$municipio,$estado,'$escuela','$localidad','$formacion_tecanica','$promedio','$programa_academico','$semestre','$opcion')";

    $resultado= mysqli_query($conex , $consulta);
   if($resultado){
    
        $sqlInfAlumno = "SELECT * FROM datos WHERE email = '$email'";
        $resInfAlumno = mysqli_query($conexion, $sqlInfAlumno);
        $infAlumno = mysqli_fetch_row($resInfAlumno);
        
        $horario = $infAlumno[0] / 125;
        $horario = floor($horario);
        $decidegrupo = $infAlumno[0];
    
    
        if($horario == 0){
          $hora="09:00-10:30";
        }
        else if($horario == 1){
          $hora="11:00-12:30";
          $decidegrupo = $decidegrupo - 125;
        }
        else if($horario == 2){
          $hora="13:00-14:30";
          $decidegrupo = $decidegrupo - 250;
        }
        else{
          $hora="15:00-16:30";
          $decidegrupo = $decidegrupo - 375;
        }
    
        if($decidegrupo<26)
          $grupo = "1107 (MIL CIENTO SIETE)";
        else if($decidegrupo>25 && $decidegrupo<51)
          $grupo = "1108 (MIL CIENTO OCHO)";
        else if($decidegrupo>50 && $decidegrupo<76)
          $grupo = "1109 (MIL CIENTO NUEVE)";
        else if($decidegrupo>75 && $decidegrupo<101)
          $grupo = "1207 (MIL DOSCIENTOS SIETE)";
        else if($decidegrupo>100 && $decidegrupo<126)
          $grupo = "1208 (MIL DOSCIENTOS OCHO)";
          
        $conexion= mysqli_connect("162.241.62.137","proye229_admon","Omarmoreno1$","proye229_alumno");
        
        $ponhorario = "UPDATE datos SET hora = '$hora' WHERE email = '$email'";
        $pongrups = "UPDATE datos SET grupo = '$grupo' WHERE email = '$email'";
        
        $res1 = mysqli_query($conex , $ponhorario);
        $res2 = mysqli_query($conex , $pongrups);
         
 
        ?> 
            <META http-equiv="refresh" content="1;url=../login/login.html"> 
        <?php
    
   }else{
       echo"Error";
       ?> 
        <META http-equiv="refresh" content="1;url=/index.html"> 
    <?php
   }
