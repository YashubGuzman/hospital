<?php
$id_post=$_POST['id_POST'];
$nombre=$_POST['nombre'];
$apaterno=$_POST['ap_paterno'];
$amaterno=$_POST['ap_materno'];
$fecha_nac=$_POST['fecha_nac'];
$fecha_alta=$_POST['fecha_alta'];
$motivo_alta=$_POST['motivo_alta'];
$fecha_ingreso=$_POST['fecha_ingreso'];
$motivo_ingreso=$_POST['motivo_ingreso'];
$fecha_defuncion=$_POST['fecha_defuncion'];
$diagnostico=$_POST['diagnostico'];


$update=PacientesData::updateById($id_post,$nombre,$apaterno,$amaterno,$fecha_nac,$fecha_ingreso,$fecha_alta,$motivo_alta,$fecha_defuncion,$motivo_ingreso,$diagnostico);



?>