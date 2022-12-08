<?php

        include('conectar-loging.php');
if (isset($_POST['user_registro']) && isset($_POST['password']) ) {
      function validar($data){
            $data = trim($data); //Elimina espacio en blanco
            $data = stripslashes($data); //Quita las barras de un string con comillas escapadas
            $data = htmlspecialchars($data);  //Convierte caracteres especiales en entidades HTML
            return $data;
      }
      $user_registro = validar($_POST['user_registro']);
      $password = validar($_POST['password']);

if (empty($user_registro)) {
      header("location: index-loging.php?errpr=Ingrese Usuario Requerido");
      exit();    
}elseif (empty($user_registro)) {
      header("location: index-loging.php?errpr=Ingrese Contraseña Requerida");
      exit(); 
}else {
      # code...
}



}


?>