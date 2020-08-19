<?php $pacientes = PacientesData::getByid($_GET["id"]);?>

<a href="index.php?view=anotificaciones&id=<?php echo $pacientes->id_pacientes;?>" class="btn btn-default pull-right"><i class='glyphicon glyphicon-bell'></i> Notificaciones</a>
		<h1>Detalles</h1>


<h3>Nombre: <span class="label label-default"><?php echo $pacientes->nombre, " ", $pacientes->ap_paterno," ", $pacientes->ap_materno; ?></span></h3>
<h3>Sexo: <span class="label label-default"><?php echo $pacientes->sexo;?></span></h3>
<h3>Fecha de nacimiento: <span class="label label-default"><?php echo $pacientes->fecha_nacimiento;?></span></h3>
<h3>Fecha y hora de ingreso: <span class="label label-default"><?php echo $pacientes->fecha_hora_ingreso;?></span></h3>
<h3>Motivo de ingreso: <span class="label label-default"><?php echo $pacientes->motivo_ingreso;?></span></h3>
<h3>Diagnostico: <span class="label label-default"><?php echo $pacientes->diagnostico;?></span></h3>
<h3>Fecha y hora de alta: <span class="label label-default"><?php echo $pacientes->fecha_hora_ingreso;?></span></h3>
<h3>Motivo de alta: <span class="label label-default"><?php echo $pacientes->motivo_alta;?></span></h3>
<h3>Fecha y hora de defunsion: <span class="label label-default"><?php echo $pacientes->fecha_hora_alta;?></span></h3>