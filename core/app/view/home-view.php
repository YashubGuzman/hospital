
      <?php 
$u=null;
if(Session::getUID()!=""):
  $u = UserData::getById(Session::getUID()); 
?>  

<?php
$op=(isset($_POST['opc']))?$_POST['opc']:"";

if($op!=""){
  $pacienteasignado = AsignacionData::getAll2($u->id,$op);
}else{
  $pacienteasignado = AsignacionData::getAll($u->id);
}

?>
       


<?php if($u->cargo=="Doctor" || $u->cargo== "Enfermera" || $u->cargo== "Personal auxiliar"):?>

  <div class="row">
	<div class="col-md-12">
		<h1>Modulos</h1>
</div>
</div>
  <div class="row">

  <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo count(PacientesData::getAll());?></h3>


              <p>Pacientes</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="./?view=pacientes" class="small-box-footer">Ver mas <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		<!-- ./col -->
       
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo count(UserData::getAll());?></h3>


              <p>Usuarios</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="./?view=users" class="small-box-footer">Ver mas <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		<!-- ./col -->

<?php endif;
	if($u->cargo=="Familiar"):
?>

<div class="row">
	<div class="col-md-12">
		<h1>Familiares</h1>
</div>
</div>
<div style="margin-left:30%;">
  <form action="" method="post">
    <input style="
      font-family: 'Roboto', sans-serif;
      outline: 0;
      background: #e0e0e0;
      width: 40%;
      border: 0;
      margin: 0 0 15px;
      padding: 15px;
      box-sizing: border-box;
      font-size: 14px;
    " placeholder="Buscar Familiar..." name="opc"/>
&nbsp;
    <button type="submit" class="btn btn-primary btn-lg active">Buscar</button>
  </form>
</div><br>

  <div class="row">


<?php
  foreach ($pacienteasignado as $p) {
?>
 <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $p->nombre;?></h3>

              <p><?php echo "Parentesco: ", $p->parentesco;?></p>
              <p><?php echo "Notificaciones Nuevas: ",count(NotificacionesData::getCountNot($p->id_pacientes));?></p>
            </div>
            <div class="icon">
            <i class="fa fa-user"></i>
            </div>
            <form action="./?view=Fnotificaciones" method="post">
              <input type="hidden" name="id_paciente" value="<?php echo $p->id_pacientes;  ?>">
              <button type="submit" style="border:none;" class="btn btn-danger btn-lg btn-block">Ver mas... <i class="fa fa-arrow-circle-right"></i></button>
            </form>
           
          </div>
        </div>
		<!-- ./col -->
<?php
  }
?>
<?php endif;?>

      </div>
      <!-- /.row -->
<?php endif;?>
<!--
<div class="row">
	<div class="col-md-12">
<?php if($found):?>
<div class="btn-group pull-right">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-download"></i> Descargar <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="report/alerts-word.php">Word 2007 (.docx)</a></li>
  </ul>
</div>
<?php endif;?>

</div>
<div class="clearfix"></div>
<?php if(count($products)>0){?>
<br><table class="table table-bordered table-hover">
	<thead>
		<th >Codigo</th>
		<th>Nombre del producto</th>
		<th>En Stock</th>
		<th></th>
	</thead>
	<?php
foreach($products as $product):
	$q=OperationData::getQYesF($product->id);
	?>
	<?php if($q<=$product->inventary_min):?>
	<tr class="<?php if($q==0){ echo "danger"; }else if($q<=$product->inventary_min/2){ echo "danger"; } else if($q<=$product->inventary_min){ echo "warning"; } ?>">
		<td><?php echo $product->id; ?></td>
		<td><?php echo $product->name; ?></td>
		<td><?php echo $q; ?></td>
		<td>
		<?php if($q==0){ echo "<span class='label label-danger'>No hay existencias.</span>";}else if($q<=$product->inventary_min/2){ echo "<span class='label label-danger'>Quedan muy pocas existencias.</span>";} else if($q<=$product->inventary_min){ echo "<span class='label label-warning'>Quedan pocas existencias.</span>";} ?>
		</td>
	</tr>
<?php endif;?>
<?php
endforeach;
?>
</table>

<div class="clearfix"></div>

	<?php
}else{
	?>
	<div class="jumbotron">
		<h2>No hay alertas</h2>
		<p>Por el momento no hay alertas de inventario, estas se muestran cuando el inventario ha alcanzado el nivel minimo.</p>
	</div>
	<?php
}

?>
-->
<br><br><br><br><br><br><br><br><br><br>
	</div>
</div>