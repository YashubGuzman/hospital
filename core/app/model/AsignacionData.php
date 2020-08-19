<?php
class AsignacionData {
	public static $tablename = "asignacion";



	public function AsignacionData(){
		$this->name = "";
		$this->lastname = "";
		$this->email = "";
		$this->image = "";
		$this->password = "";
		$this->created_at = "NOW()";
    }



    public static function getAll($id){
		$sql = "select asignacion.id_asignacion, asignacion.parentesco, pacientes.id_pacientes, pacientes.nombre from ".self::$tablename." inner join pacientes on asignacion.id_pacientes=pacientes.id_pacientes where id_usuario=$id";
		$query = Executor::doit($sql);
		return Model::many($query[0],new AsignacionData());
	}

	
	public static function getAll2($id,$op){
		$porciones = explode(" ", $op);
		if($porciones[0]!="" || $porciones[0]!=" " || $porciones[0]!=NULL && $porciones[1]=="" || $porciones[1]==" " || $porciones[1]==NULL){
			$n=$porciones[0];
		}else if($porciones[0]!="" || $porciones[0]!=" " || $porciones[0]!=NULL && $porciones[1]!="" || $porciones[1]!=" " || $porciones[1]!=NULL){
			$n=$porciones[0]." ".$porciones[1];
		}
		$ap=$porciones[2];
		$am=$porciones[3];

		if($ap=="" || $ap==" " || $ap==NULL && $am=="" || $am==" " || $am==NULL){
			$sql = "select asignacion.id_asignacion, asignacion.parentesco, pacientes.id_pacientes, pacientes.nombre, pacientes.ap_paterno, pacientes.ap_materno from ".self::$tablename." inner join pacientes on asignacion.id_pacientes=pacientes.id_pacientes where id_usuario=$id AND pacientes.nombre like \"%$n%\"";
		}else if($ap!="" || $ap!=" " || $ap!=NULL && $n!="" || $n!=" " || $n!=NULL){
			$sql = "select asignacion.id_asignacion, asignacion.parentesco, pacientes.id_pacientes, pacientes.nombre, pacientes.ap_paterno, pacientes.ap_materno from ".self::$tablename." inner join pacientes on asignacion.id_pacientes=pacientes.id_pacientes where id_usuario=$id AND pacientes.nombre like \"%$n%\"  AND pacientes.ap_paterno like \"%$ap%\" ";
		}else if($ap!="" || $ap!=" " || $ap!=NULL && $n!="" || $n!=" " || $n!=NULL&& $ap!="" || $ap!=" " || $ap!=NULL){
			$sql = "select asignacion.id_asignacion, asignacion.parentesco, pacientes.id_pacientes, pacientes.nombre, pacientes.ap_paterno, pacientes.ap_materno from ".self::$tablename." inner join pacientes on asignacion.id_pacientes=pacientes.id_pacientes where id_usuario=$id AND pacientes.nombre like \"%$n%\"  AND pacientes.ap_paterno like \"%$ap%\" AND pacientes.ap_materno like \"%$am%\"";
		}

		$query = Executor::doit($sql);
		return Model::many($query[0],new AsignacionData());
	}


	public static function insertAsignacion($id_paciente,$id_usuario,$parentesco){
		$sql="insert into asignacion (id_usuario,id_pacientes,parentesco) VALUES ($id_usuario, $id_paciente,\"$parentesco\")";
		$query = Executor::doit($sql);
		header('Location:./?view=pacientes');
	}

	
	public static function buscarAsignacion($id_paciente){
		$busqueda="select * from asignacion where  id_pacientes=$id_paciente";
		$query=Executor::doit($busqueda);
		return Model::many($query[0],new AsignacionData());
	}






    /*

    

	public function add(){
		
			$sql = "insert into usuario (nombre,apellidos,fecha_nac,username,email,password,cargo) ";
			$sql .= "value (\"$this->name\",\"$this->lastname\",'$this->fecha_nac',\"$this->username\",\"$this->email\",\"$this->password\",\"$this->cargo\")";
			
			Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objeto UserData previamente utilizamos el contexto
	
	public function update(){
		$sql = "update ".self::$tablename." set nombre=\"$this->name\",email=\"$this->email\",username=\"$this->username\",apellidos=\"$this->lastname\",is_active=\"$this->is_active\",administrador=\"$this->is_admin\" where id=$this->id";
		Executor::doit($sql);
	}

	public function update_passwd(){
		$sql = "update ".self::$tablename." set password=\"$this->password\" where id=$this->id";
		Executor::doit($sql);
	}


	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());

	}

	public static function getByMail($mail){
		$sql = "select * from ".self::$tablename." where email=\"$mail\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());

	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new UserData());
	}



	/*
public static function getAll(){
	$sql = "select usuario.id, usuario.nombre, usuario.apellidos, usuario.username, usuario.email, rol_usuario.rol from ".self::$tablename." inner join rol_usuario on usuario.id_rol=rol_usuario.id_rol where id!=1 order by id";
	$query = Executor::doit($sql);
	$array = array();
	$cnt = 0;
	while($r = $query[0]->fetch_array()){
		$array[$cnt] = new UserData();
		$array[$cnt]->id = $r['id'];
		$array[$cnt]->nombre = $r['nombre'];
		$array[$cnt]->apellidos = $r['apellidos'];
		$array[$cnt]->username = $r['username'];
		$array[$cnt]->email = $r['email'];
		$array[$cnt]->rol = $r['rol'];
		$cnt++;
	}
	return $array;
}

	public static function getAllAsesor(){
		$sql = "select * from ".self::$tablename." where id_rol=2";
		$query = Executor::doit($sql);
		return Model::many($query[0],new UserData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where nombre like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new UserData());

	}


	public static function getByUser($usuario,$email){
		$sql = "select * from ".self::$tablename." where username = '$usuario' || email='$email'";
		$query = Executor::doit($sql);
		$array = array();
		$cnt = 0;
		while($r = $query[0]->fetch_array()){
			$array[$cnt] = new UserData();
			$array[$cnt]->username = $r['username'];
			$array[$cnt]->email = $r['email'];
			$cnt++;
		}
		return $array;
	}


*/


}




?>