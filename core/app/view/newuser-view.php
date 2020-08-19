<div class="row">
	<div class="col-md-12">

	<h1>Agregar Usuario</h1>
	<br>
		<form class="form-horizontal" method="post" onsubmit="setFormSubmitting()" id="addproduct" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="name" accesskey="1" autofocus required class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="lastname" accesskey="2" required class="form-control" id="lastname" placeholder="Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre de usuario*</label>
    <div class="col-md-6">
      <input type="text" name="username" accesskey="3" class="form-control" required id="username" placeholder="Nombre de usuario">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="text" name="email" accesskey="4" required class="form-control" id="email" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Contrase&ntilde;a*</label>
    <div class="col-md-6">
      <input type="password" name="password" accesskey="5" required class="form-control" id="password" placeholder="Contrase&ntilde;a">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de nacimiento</label>
    <div class="col-md-2">
      <input type="date" name="fecha_nac" class="form-control" id="fecha_nac" placeholder="Fecha de nacimiento">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Cargo*</label>
    <div class="col-md-6">
    <select name="cargo" accesskey="5" required class="form-control">
    <option value="">-- Ninguna --</option>
      <option>Doctor</option>
      <option>Enfermera</option>
      <option>Personal auxiliar</option>
      </select>    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      
     <!-- <button type="submit" class="btn btn-primary">Agregar Usuario</button>
-->

      <button name="BtnGuardar" type="submit" onclick=this.form.action="index.php?view=adduser" class="btn btn-primary">Confirmar</button>

      <button name="BtnCancelar" onclick=this.form.action="index.php?view=users" formnovalidate class="btn btn-danger">Cancelar</button>


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