<?php 
$notificacion = NotificacionesData::getAllEdit($_POST['id_notificacion']);
    ?>

<div class="row">
	<div class="col-md-12">

	<h1>Editar notificación</h1>
	<br>
		<form class="form-horizontal" method="post" onsubmit="setFormSubmitting()" id="addproduct" role="form">



  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Titulo*</label>
    <div class="col-md-6">
      <input type="text" name="titulo" value="<?php echo $notificacion[0]->titulo;?>" autofocus required class="form-control" id="name" placeholder="Titulo de la notificación">
    </div>
  </div>
 
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Detalle*</label>
    <div class="col-md-6">
      <input type="text" name="detalle" value="<?php echo $notificacion[0]->detalle;?>" required class="form-control" id="lastname" placeholder="Detalle de la notificación">
    </div>
  </div>

  <?php
$id_notificacion=$_POST['id_notificacion'];
$id_usuario_notificacion=$_POST['id_usuario_notificacion'];
?>

  <input type="hidden" value="<?php echo $id_notificacion;?>" name="id_notificacion">
  <input type="hidden" value="<?php echo $id_usuario_notificacion;?>" name="id_usuario_notificacion">

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">


      <button name="BtnGuardar" type="submit" onclick=this.form.action="index.php?view=updatenotificacion" class="btn btn-primary">Confirmar</button>

      <button name="BtnCancelar" onclick=this.form.action="index.php?view=pacientes" formnovalidate class="btn btn-danger">Cancelar</button>


    </div>
  </div>
</form>
	</div>
</div>

<p class="alert alert-info">* Campos obligatorios</p>

