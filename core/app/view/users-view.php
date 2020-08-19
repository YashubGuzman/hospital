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
}
?>

	<a href="index.php?view=newuser" class="btn btn-default pull-right"><i class='glyphicon glyphicon-user'></i> Nuevo usuario</a>
		<h1>Usuarios</h1>
<br>
		<?php
	
		?>
		<?php


		$users = UserData::getAll(); 
			if(count($users)>0){
			// si hay usuarios
			?>
			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre completo</th>
			<th>Nombre de usuario</th>
			<th>Email</th>
			<th>Cargo</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo utf8_encode($user->nombre)." ".utf8_encode($user->apellidos); ?></td>
				<td><?php echo $user->username; ?></td>
				<td><?php echo $user->email; ?></td>
				<td><?php echo $user->cargo; ?></td>
				
				<td>
					
				</td>


				
				<td style="width:130px;">
<!--
				<a href="index.php?view=edituser&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a>
-->
				<a href="index.php?view=deluser&id=<?php echo $user->id;?>" onclick="return confirmar()" class="btn btn-danger btn-xs">Eliminar</a></td>


				<?php

			}
 echo "</table>";


		}else{
			// no hay usuarios
		}


		?>


	</div>
</div>