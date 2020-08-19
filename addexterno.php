<?php

include "core/app/model/UserData.php";
include "core/controller/Executor.php";
include "core/controller/Database.php";
include "core/controller/Core.php";


$user = new UserData();

$username = $_POST["username"];
$email = $_POST["email"];

$users = UserData::getByUser($username, $email);

if(count($users)>0){
	
?>


<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Aviso!</h4>
                Ya existe un usuario con el mismo nombre o email.
              </div>

	<?php
}else{

if(count($_POST)>0){

	$user = new UserData();

	$user->name = $_POST["nombre"];
	$user->lastname = $_POST["apellidos"];
	$user->username = $_POST["username"];
	$user->email = $_POST["email"];
	$user->password = sha1(md5($_POST["password"]));
	$user->fecha_nac = $_POST["fecha_nac"];
	$user->cargo = "Familiar";

	$user->add();


		header('Location: /yashub/hospital');

}
	
}



?>
