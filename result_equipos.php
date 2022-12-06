<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab. Schaffner</title>
</head>
<body>
    <?php
    $servername="localhost";
    $database="schaffner_db";
    $username="root";
    $password="";

    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die("No se conecto". mysqli_connect_error());
    }  echo "Conectado correctamente";

    $serie= $_POST["serie"];


    $consulta="SELECT * FROM equipos WHERE serie_equipo='$serie'";
    $resultado = mysqli_query($conn, $consulta);

    if(mysqli_num_rows($resultado) > 0){
        while($row = mysqli_fetch_assoc($resultado)){
        // MUESTRA LA INFORMACION en un formulario
        echo "
            <form action='' method=''>
            Marca Equipo: " . $row["marca_equipo"]  ."<br> Año: ". $row["ano_equipo"]." <br> N° Serie:  ".$row["serie_equipo"]." <br> Voltaje AT: ".$row["volat_equipo"]." <br> Voltaje BT: ".$row["volbt_equipo"]." <br> Voltaje Terciario: ".$row["volter_equipo"]." <br> Potencia Etapa 1: ".$row["pote1_equipo"]." <br> Potencia Etapa 2: ".$row["pote2_equipo"]."
        ";
        
    }
} else {
        echo "<br> 0 resultados";
    }
    
    
    ?>
</body>
</html>