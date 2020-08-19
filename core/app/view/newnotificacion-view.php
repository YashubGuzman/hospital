<?php 
$sexo = SexoData::getAll();
    ?>

<div class="row">
	<div class="col-md-12">

	<h1>Agregar notificación</h1>
	<br>
		<form class="form-horizontal" method="post" onsubmit="setFormSubmitting()" id="addproduct" role="form">



  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Titulo*</label>
    <div class="col-md-6">
      <input type="text" name="titulo" autofocus required class="form-control" id="name" placeholder="Titulo de la notificación">
    </div>
  </div>
 
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Detalle*</label>
    <div class="col-md-6">
      <input type="text" name="detalle" required class="form-control" id="lastname" placeholder="Detalle de la notificación">
    </div>
  </div>

  <?php
$id_notificacion=$_GET["id"];
?>

  <input type="hidden" value="<?php echo $id_notificacion;?>" name="id_notificacion">

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">


      <button name="BtnGuardar" type="submit" onclick=this.form.action="index.php?view=addnotificacion" class="btn btn-primary">Confirmar</button>

      <button name="BtnCancelar" onclick=this.form.action="index.php?view=pacientes" formnovalidate class="btn btn-danger">Cancelar</button>


    </div>
  </div>
</form>
	</div>
</div>

<p class="alert alert-info">* Campos obligatorios</p>

