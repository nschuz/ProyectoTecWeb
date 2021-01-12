<?php

//include("conexion_db.php");
//$link = mysqli_connect("localhost","proye229_admon","Omarmoreno1$") or die ("<h2>No se encuentra el servidor</h2>");
//$db = mysqli_select_db("usuarios",$link) or die ("<h2>Error de conexion</h2>");

$conex= mysqli_connect("localhost","root","","proye229_alumno") or die ("Conexion invalida");

echo "\nconexion buena";




    $name= trim($_POST["first_name"]);
    $apaterno= trim($_POST["last_name"]);
    $amaterno= trim($_POST["last_name2"]);
    $curp=trim($_POST["curp"]);
    $sexo=trim($_POST["sexo"]);
    $fecha=date($_POST["fecha"]);
    $email=trim($_POST["email"]);
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
    $semestre=trim($_POST["programa_academico"]);
    $opcion=trim($_POST["opcion"]);

    
    echo"\nNombre: ",$name;
    
    $consulta="INSERT INTO datos(nombres) VALUES ('$name')";


    //$consulta="INSERT INTO datos(nombres, apaterno, amaterno, curp, genero, fecha_nac, email, telefono, calle, numero, colonia, alcaldia_municipio, estado, escuela_procedencia, localidad, formacion_tecnica, promedio, carrera_aceptado,semestre,num_opcion) VALUES ('$name','$apaterno','$amaterno','$curp','$sexo','$fecha','$email','$telefono','$calle','$numero',$colonia,$municipio,$estado,'$escuela','$localidad','$formacion_tecanica','$promedio','$programa_academico','$semestre','$opcion')";

   

    $resultado= mysqli_query($conex , $consulta);
   if($resultado){
    echo"\nInsecion valida";
   }else{
       echo"Error";
   }
