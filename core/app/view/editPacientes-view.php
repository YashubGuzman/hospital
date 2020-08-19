<?php 
$id_POST=$_POST['id_pacientes'];
$p=PacientesData::getByID($id_POST) ?>
<div class="row">
	<div class="col-md-12">
	<h1>Editar datos del paciente</h1>
	<br>
		<form class="form-horizontal" method="post" id="addproduct" action="./?view=updatePaciente" role="form">
<input type="text" name="id_POST" value="<?php echo $id_POST; ?>"/>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre" value="<?php echo $p->nombre;?>" class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido Paterno*</label>
    <div class="col-md-6">
      <input type="text" name="ap_paterno" value="<?php echo $p->ap_paterno;?>" required class="form-control" id="lastname" placeholder="Apellido Paterno">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido Materno*</label>
    <div class="col-md-6">
      <input type="text" name="ap_materno" value="<?php echo $p->ap_materno;?>" required class="form-control" id="lastname" placeholder="Apellido Materno">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de Nacimiento*</label>
    <div class="col-md-6">
      <input type="date" name="fecha_nac" value="<?php echo $p->fecha_nacimiento;?>" class="form-control" required id="fecha_nac" placeholder="Fecha de Nacimiento">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de alta*</label>
    <div class="col-md-6">
      <input type="date" name="fecha_alta"  value="<?php echo $p->motivo_alta; ?>" class="form-control"  id="fecha_alta" placeholder="Fecha de Nacimiento">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Motivo de alta*</label>
    <div class="col-md-6">
      <input type="text" name="motivo_alta"  value="<?php echo $p->motivo_alta; ?>" class="form-control" id="lastname" placeholder="Motivo de alta">
    </div>
  </div>



  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de ingreso*</label>
    <div class="col-md-6">
      <input type="date" name="fecha_ingreso" class="form-control" required id="fecha_ingreso">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Motivo de ingreso*</label>
    <div class="col-md-6">
      <input type="text" value="<?php echo $p->motivo_ingreso; ?>" name="motivo_ingreso" required class="form-control" id="motivo_ingreso" placeholder="Motivo de ingreso">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de defuncion*</label>
    <div class="col-md-6">
      <input type="date" name="fecha_defuncion" class="form-control" id="fecha_defuncion">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Diagnostico*</label>
    <div class="col-md-6">
    <input type="text" value="<?php echo $p->diagnostico; ?>" required class="form-control" placeholder="Escribe el diagnostico del paciente..." name="diagnostico"/>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
      <button type="submit" class="btn btn-primary">Confirmar</button>
      <button name="BtnCancelar" onclick=this.form.action="index.php?view=pacientes" formnovalidate class="btn btn-danger">Cancelar</button>

    </div>
  </div>


  <p class="alert alert-info">* Campos obligatorios</p>

</form>
	</div>
</div>