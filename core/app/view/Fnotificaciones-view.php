<?php
$id_post=$_POST['id_paciente'];
$notificacion=NotificacionesData::getAll($id_post);
?>
		<h1>Notificaciones</h1>
<?php
foreach ($notificacion as $n) {
?>

<div  style="height:220px; margin-top:5%;"class="col-lg-4 col-xs-6">
          <!-- small box -->
<?php if($n->estado=="Visto"){ ?>
          <div style="height:220px;" class="small-box bg-green">
<?php }else{ ?>
        <div style="height:250px; " class="small-box bg-blue">
    <?php } ?>
            <div class="inner">
              <h3 style="font-size:21.6px;"><?php echo utf8_encode($n->titulo);?></h3>

            <p style="font-size:17px;"><b>Detalles: </b> <?php echo utf8_encode($n->detalle);?></p>
            <p><b>Doctor/Enfermera que lo atendio: </b> <?php echo utf8_encode($n->nombre_doc)." ".utf8_encode($n->apellidos_doc);?></p>
            <p><b>Fecha y Hora: </b> <?php echo $n->fecha_hora;?></p>
            <p><b>Nombre del Paciente: </b><?php echo $n->nombre_pac." ".$n->ap_paterno_pac." ".$n->ap_materno_pac;?></p>
            </div>
            <div class="icon">
              
            </div>
            <form action="./?view=Fupdatenotificacion" method="post">
              <input type="hidden" name="id_notificacion" value="<?php echo $n->id_notificacion; ?>">
        <?php if($n->estado=="Visto"){ ?>
        <?php }else{ ?>
                <button type="submit" style="border:none; position:absolute;
    bottom:0;" class="btn btn-primary btn-lg btn-block">Marcar como vista <i class="fa fa-arrow-circle-right"></i></button>
        <?php } ?>
           </form>
           
          </div>
        </div>
		<!-- ./col -->


<?php
    
}
?>