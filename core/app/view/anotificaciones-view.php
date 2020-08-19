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
$id_notificacion=$_GET["id"];
$id_usuario_notificacion=$_GET["id"];
?>

	<a href="index.php?view=newnotificacion&id=<?php echo $id_notificacion;?>" class="btn btn-default pull-right"><i class='glyphicon glyphicon-user'></i> Nueva notificación</a>
		<h1>Notificaciones</h1>
<br>

		<?php


		$notificacion = NotificacionesData::getAll($_GET["id"]); 
			if(count($notificacion)>0){
			// si hay usuarios
			?>
			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre</th>
			<th>Detalle</th>
			<th>Fecha y hora</th>
            <th>Estado</th>
            <th>Doctor que la realizó</th>
			<th></th>
			</thead>
			<?php
			foreach($notificacion as $notificacion){
				?>
				<tr>
				<td><?php echo utf8_encode($notificacion->titulo); ?></td>
				<td><?php echo utf8_encode($notificacion->detalle); ?></td>
				<td><?php echo $notificacion->fecha_hora; ?></td>
                <td><?php echo utf8_encode($notificacion->estado); ?></td>
                <td><?php echo $notificacion->nombre_doc, " ", $notificacion->apellidos_doc; ?></td>
				
				<td>
					
				</td>


				
				<td style="width:130px;">

				<form action="./?view=editnotificacion" style="display:inline-block;" method="post">
				<input type="hidden" value="<?php echo $notificacion->id_notificacion;?>" name="id_notificacion">
				<input type="hidden" value="<?php echo $id_usuario_notificacion;?>" name="id_usuario_notificacion">
				<button type="submit"  class="btn btn-warning btn-xs">Editar</button>
				</form>	

				<a href="index.php?view=delnotificacion&id=<?php echo $notificacion->id_notificacion;?>" onclick="return confirmar()" class="btn btn-danger btn-xs">Eliminar</a></td>


				<?php

			}
 echo "</table>";


		}else{
			// no hay usuarios
		}


		?>


	</div>
</div>