<?php
class NotificacionesData {
	public static $tablename = "notificacion";



	public function NotificacionesData(){
		$this->name = "";
		$this->lastname = "";
		$this->email = "";
		$this->image = "";
		$this->password = "";
		$this->created_at = "NOW()";
    }



    public static function getAll($id){
		$sql="select notificacion.id_notificacion, notificacion.titulo, notificacion.detalle, notificacion.fecha_hora, c_estado.id_estado, c_estado.estado, usuario.id as id_usuario, usuario.nombre as nombre_doc, usuario.apellidos as apellidos_doc, pacientes.id_pacientes, pacientes.nombre as nombre_pac, pacientes.ap_paterno as ap_paterno_pac, pacientes.ap_materno as ap_materno_pac from notificacion inner join usuario on notificacion.id_usuario=usuario.id inner join pacientes on notificacion.id_pacientes=pacientes.id_pacientes inner join c_estado on notificacion.id_estado=c_estado.id_estado where pacientes.id_pacientes=$id order by id_notificacion desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new NotificacionesData());
	}

	public static function getAllEdit($id){
		$sql="select * from notificacion where id_notificacion=$id";
		$query = Executor::doit($sql);
		return Model::many($query[0],new NotificacionesData());
	}

    
	public static function updateState($id){
		$sql="UPDATE notificacion SET id_estado=2 WHERE id_notificacion=$id ";
		$query = Executor::doit($sql);
		header('Location:./?view=home');
	}
   
	public static function getCountNot($id){
		$sql="SELECT * FROM notificacion WHERE id_pacientes=$id AND id_estado=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new NotificacionesData());
	}

	public function addNotificacion(){

		$sql = "insert into notificacion (titulo, detalle, fecha_hora, id_estado, id_usuario, id_pacientes) ";
		$sql .= "value (\"$this->titulo\", \"$this->detalle\",$this->fecha_actual, $this->estado, $this->id_usuario, $this->id_paciente)";
		
		$query = Executor::doit($sql);
}

	public function updateNotificacion(){

		$sql = "update notificacion set titulo=\"$this->titulo\", detalle=\"$this->detalle\", fecha_hora=$this->fecha_actual, id_estado=$this->estado, id_usuario=$this->id_usuario, id_pacientes=$this->id_paciente where id_notificacion=$this->id_notificacion";		
		$query = Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id_notificacion=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id_notificacion=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id_notificacion=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new NotificacionesData());

	}


	  /*
	  
	  public static function addNotificacion(){

		$sql = "insert into notificacion (titulo, detalle, fecha_hora, id_estado, id_usuario, id_pacientes) ";
		$sql .= "value (\"$this->titulo\", \"$this->detalle\",now(), $this->estado, $this->id_usuario, $this->id_paciente)";
		
		$query = Executor::doit($sql);
}

    

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