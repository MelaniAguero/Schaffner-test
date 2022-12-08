<?php 
include_once('bd.php');
//recibo datos del form registro
$nombre=$_POST['nombre'];
$num_fiscal=$_POST['num_fiscal'];
$direccion=$_POST['direccion'];
$mail=$_POST['mail'];
$user_registro=$_POST['user_registro'];
$password=$_POST['password'];


echo"Sus datos guardados son los siguientes: <br>";
echo "$nombre, $num_fistal, $direccion, $mail,$user_registro,$password";

      $sql="INSERT INTO registro (nombre, num_fiscal, direccion, mail, user_registro, password)
      VALUES =( '$nombre', '$num_fistal', '$direccion', '$mail','$user_registro', '$password')";
      $result = mysqli_query($conectar, $sql)or trigger_error("error sql: ".mysqli_error($conectar));

?>