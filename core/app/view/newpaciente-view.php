<?php 
$sexo = SexoData::getAll();
    ?>

<div class="row">
	<div class="col-md-12">

	<h1>Agregar paciente</h1>
	<br>
		<form class="form-horizontal" method="post" onsubmit="setFormSubmitting()" id="addproduct" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre" autofocus required class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>
 
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido paterno*</label>
    <div class="col-md-6">
      <input type="text" name="ap_paterno" required class="form-control" id="lastname" placeholder="Apellido paterno">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido materno*</label>
    <div class="col-md-6">
      <input type="text" name="ap_materno" required class="form-control" id="lastname" placeholder="Apellido materno">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Sexo*</label>
    <div class="col-md-6">
    <select name="sexo" required class="form-control">
    <option value="">-- Ninguna --</option>
    <?php foreach($sexo as $sexo):?>
      <option value="<?php echo $sexo->id_sexo;?>"><?php echo $sexo->sexo;?></option>
    <?php endforeach;?>
      </select>    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de nacimiento*</label>
    <div class="col-md-2">
      <input type="date" name="fecha_nac" class="form-control" id="fecha_nac" placeholder="Fecha de nacimiento">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha y hora de ingreso*</label>
    <div class="col-md-3">
      <input type="datetime-local" name="fecha_ingreso" class="form-control" id="fecha_nac" placeholder="Fecha y hora de ingreso">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Motivo de ingreso *</label>
    <div class="col-md-6">
    <textarea name="motivo_ingreso" rows="3" cols="20" class="form-control" id="motivo_ingreso" placeholder="Motivo de ingreso" ></textarea>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Diagnostico *</label>
    <div class="col-md-6">
    <textarea name="diagnostico" rows="3" cols="20" class="form-control" id="diagnostico" placeholder="Diagnostico" ></textarea>
    </div>
  </div>

  

  

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      
     <!-- <button type="submit" class="btn btn-primary">Agregar Usuario</button>
-->

      <button name="BtnGuardar" type="submit" onclick=this.form.action="index.php?view=addpaciente" class="btn btn-primary">Confirmar</button>

      <button name="BtnCancelar" onclick=this.form.action="index.php?view=pacientes" formnovalidate class="btn btn-danger">Cancelar</button>


    </div>
  </div>
</form>
	</div>
</div>

<p class="alert alert-info">* Campos obligatorios</p>


<script>
var formSubmitting = false;
var setFormSubmitting = function() { formSubmitting = true; };
var isDirty = function() { return true; }

window.onload = function() {
    window.addEventListener("beforeunload", function (e) {
        if (formSubmitting || !isDirty()) {
            return undefined;
        }

        var confirmationMessage = 'It looks like you have been editing something. '
                                + 'If you leave before saving, your changes will be lost.';

        (e || window.event).returnValue = confirmationMessage; //Gecko + IE
        return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
    });
};
</script>