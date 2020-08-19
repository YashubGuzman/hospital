<?php

$u=null;
  $u = UserData::getById(Session::getUID()); 
if(count($_POST)>0){

	$notificacion = new NotificacionesData();

    $notificacion->id_usuario = $u->id;
    $notificacion->titulo = $_POST["titulo"];
    $notificacion->detalle = $_POST["detalle"];
    $notificacion->estado = 1;
    $notificacion->id_paciente = $_POST["id_notificacion"];
    $notificacion->fecha_actual = ("now()");

	
	$notificacion->addNotificacion();


print "<script>window.location='index.php?view=pacientes';</script>";

}
	
?>