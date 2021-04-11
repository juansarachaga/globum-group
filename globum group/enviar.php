<?php 
 $destino = "podavinidante@globumgroup.com.ar";
 $Name = $_POST["Name"];
 $Email = $_POST["Email"];
 $Message = $_POST ["Message"];
 $contenido = "Name:" . $Name ."\nEmail: " .$Email ."\Message" .$Message
 mail ($destino,"contacto", $contenido);
 header ("Location:thank.html");
 
 ?> 