<?php
    $servername="localhost";
    $database="dialeclab";
    $username="root";
    $password="";

    $conn = mysqli_connect($servername, $database, $username, $password);

     if(!$conn){
        die("No se conecto". mysqli_connect_error());
    }  echo "Conectado correctamente";

?>