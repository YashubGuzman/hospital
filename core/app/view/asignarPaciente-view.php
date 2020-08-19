<?php

$paciente = new AsignacionData();

$id_paciente=$_POST['id_paciente'];
$id_user=$_POST['id_usuario'];
$parentesco=$_POST['parentesco'];



//$u=AsignacionData::insertAsignacion($id_paciente,$id_user,$parentesco);

$asignar=AsignacionData::buscarAsignacion($id_paciente);

if($asignar){
    echo "ya existe un familiar asignado a este paciente";
}else{
    $paciente->insertAsignacion($id_paciente,$id_user,$parentesco);
}


?>