<?php

include_once 'dbconfig.php';

$res = $conexion->query("SELECT * FROM información");/*Aqui colocamos la sentencia que querramos ejecutar*/ 

while($f = $res->fetch_object()){
    echo $f->id,' '.$f->name.' '.$f->lastname.'<br /';/*esta sentencia devuelve los name y lastname de la tabla, en el caso de ser diferente cambiar los parametros*/
}

?>
