<?php

    $nombre = $_GET["nombre"];
    $edad = $_GET["edad"];
    $escuela = $_GET["escuela"];
    $especialidad = $_GET["especialidad"];
    $comidafav = $_GET["comidafav"];
    //obtienen los valores

    if($edad > 18){
        echo "<h1>".$nombre." es mayor de edad</h1>";
    } else {
        echo "<h1>".$nombre." NO es mayor de edad</h1>";
    }
    
    echo "<h1>Nombre del Alumno: ".$nombre."</h1>";

    echo "<h2>Edad: ".$edad."</h2>";

    echo "<h2>Escuela: ".$escuela."</h2>";

    echo "<h2>especialidad: ".$especialidad."</h2>";
    
    echo "<h2>comidafav: ".$comidafav."</h2>";

    

    //Imprimir el valor de esos campos

?>