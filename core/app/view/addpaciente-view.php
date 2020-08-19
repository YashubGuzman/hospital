<?php



if(count($_POST)>0){

	$pacientes = new PacientesData();

    $pacientes->nombre = $_POST["nombre"];
    $pacientes->ap_paterno = $_POST["ap_paterno"];
    $pacientes->ap_materno = $_POST["ap_materno"];
    $pacientes->sexo = $_POST["sexo"];
    $pacientes->fecha_nac = $_POST["fecha_nac"];
    $pacientes->fecha_ingreso = $_POST["fecha_ingreso"];
    $pacientes->motivo_ingreso = $_POST["motivo_ingreso"];
    $pacientes->diagnostico = $_POST["diagnostico"];
	
	$pacientes->add();


print "<script>window.location='index.php?view=pacientes';</script>";


}
	

?>