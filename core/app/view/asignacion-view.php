<?php
    $id=$_POST['id_pacientes'];
    $paciente=PacientesData::getByid($id);
?>

<h3 style="font-size:30px;"><b>Paciente: </b> <?php echo $paciente->nombre." ".$paciente->ap_paterno." ".$paciente->ap_materno;?></h3>
<br>
<?php $users = UserData::getByrol(); 
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
        <td><?php echo $user->nombre." ".$user->apellidos; ?></td>
        <td><?php echo $user->username; ?></td>
        <td><?php echo $user->email; ?></td>
        <td><?php echo $user->cargo; ?></td>
        
        <td>
            
        </td>


        
        <td style="width:130px;">
        <form action="./?view=asignarPaciente" method="POST">
            <input type="hidden" value="<?php echo $id;?>" name="id_paciente">
            <input type="hidden" value="<?php echo $user->id;?>" name="id_usuario">
            <input type="text" required placeholder="Parentesco..."  name="parentesco">
            <button href="./?view=edituser&id=<?php echo $user->id;?>" style="width:100%;" class="btn btn-primary btn-xs">Asignar</button>
        </form>
        
        </td>


        <?php

    }
echo "</table>";


}else{
    // no hay usuarios
}?>