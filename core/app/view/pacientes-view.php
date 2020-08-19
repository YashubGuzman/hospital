<div class="row">
	<div class="col-md-12">

<script>
function confirmar()
{
  if(confirm('¿Esta seguro de eliminar este elemento?'))
    return true;
  else
    return false;
}
</script>

		<?php 
$u=null;
if(Session::getUID()!=""){
  $u = UserData::getById(Session::getUID()); 
  $busqueda = new AsignacionData();
}
?>

	<a href="index.php?view=newpaciente" class="btn btn-default pull-right"><i class='glyphicon glyphicon-th-list'></i> Nuevo paciente</a>
		<h1>Pacientes</h1>
<br>

		<?php


		$pacientes = PacientesData::getAll(); 
			if(count($pacientes)>0){
			// si hay usuarios
			?>
			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre completo</th>
            <th>Sexo</th>
            <th>Fecha de ingreso</th>
            <th>Motivo de ingreso</th>
			<th></th>
			</thead>
			<?php
			foreach($pacientes as $paciente){
				?>
				<tr>
				<td><?php echo utf8_encode($paciente->nombre)." ".$paciente->ap_paterno." ".$paciente->ap_materno; ?></td>
                <td><?php echo $paciente->sexo; ?></td>
                <td><?php echo $paciente->fecha_hora_ingreso; ?></td>
                <td><?php echo utf8_encode($paciente->motivo_ingreso); ?></td>
					<?php  $asignar=AsignacionData::buscarAsignacion($paciente->id_pacientes); ?>
				
				<td>
					
				</td>


				
				<td style="width:210px; height:35px;">
<!--
				
-->				
		<?php 
		if($asignar){ ?>
		<form style="display:inline-block; " action="./?view=asignacion" method="POST">
			<input type="hidden" value="<?php echo $paciente->id_pacientes;?>" name="id_pacientes">
			<button disabled style="width:95%; height:26px;" class="btn btn-primary btn-xs">Asignar</button>
		</form>
		<?php
		}else{ ?>
    		
		<form style="display:inline-block; " action="./?view=asignacion" method="POST">
			<input type="hidden" value="<?php echo $paciente->id_pacientes;?>" name="id_pacientes">
			<button style="width:95%; height:26px;" class="btn btn-primary btn-xs">Asignar</button>
		</form>
		<?php } ?>


		
		<a style="width:28%; height:26px;" href="index.php?view=detallespaciente&id=<?php echo $paciente->id_pacientes;?>" class="btn btn-success btn-xs">Detalles</a>	
	
		<form action="./?view=editPacientes" style="display:inline-block;" method="post">
			<input type="hidden" value="<?php echo $paciente->id_pacientes;?>" name="id_pacientes">
			<button type="submit" style="width:100%; height:26px;" class="btn btn-warning btn-xs">Editar</button>
		</form>
				</td>
				<?php

			}
 echo "</table>";


		}else{
			// no hay usuarios
		}


		?>


	</div>
</div>