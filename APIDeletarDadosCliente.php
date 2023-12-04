<?php

header('Content-Type: text/html; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once('dbConnect.php');

    mysqli_set_charset($con, "utf8");

    $id_usuario = $_POST["id_usuario"];
    
    $sql = "DELETE FROM usuario                                 
         WHERE id_usuario = '$id_usuario'";

    if (mysqli_query($con, $sql))
     {
           echo "Sucesso";
           
      } else {
      
           echo "Erro ".$sql;
      }

    mysqli_close($con); 
    
} else {

   
	echo "Acesso Negado";
}

?>