<?php

$u=null;
  $u = UserData::getById(Session::getUID()); 
if(count($_POST)>0){

	$notificacion = new NotificacionesData();

    $notificacion->id_paciente = $_POST['id_usuario_notificacion'];
    $notificacion->id_usuario = $u->id;
    $notificacion->titulo = $_POST["titulo"];
    $notificacion->detalle = $_POST["detalle"];
    $notificacion->estado = 1;
    $notificacion->id_notificacion = $_POST['id_notificacion'];
    $notificacion->fecha_actual = ("now()");

    echo "id_notificacion: ", $notificacion->id_notificacion, " ";
    echo "titulo: ", $notificacion->titulo, " ";
    echo "detalles: ", $notificacion->detalle, " ";
    echo "hora_fecha: ",$notificacion->fecha_actual, " ";
    echo "id_estado: ", $notificacion->estado, " ";
    echo "id_usuario: ", $notificacion->id_usuario, " ";
    echo "id_paciente: ", $notificacion->id_paciente;

	
	$notificacion->updateNotificacion();


print "<script>window.location='index.php?view=pacientes';</script>";

}
	
?>