<?php
class PacientesData {
	public static $tablename = "pacientes";



	public function PacientesData(){
		$this->name = "";
		$this->lastname = "";
		$this->email = "";
		$this->image = "";
		$this->password = "";
		$this->created_at = "NOW()";
    }



    public static function getAll(){
		$sql="select pacientes.id_pacientes, pacientes.nombre, pacientes.ap_paterno, pacientes.ap_materno, c_sexo.id_sexo, c_sexo.sexo, pacientes.fecha_hora_ingreso, pacientes.motivo_ingreso from pacientes inner join c_sexo on pacientes.id_sexo=c_sexo.id_sexo";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PacientesData());
	}


	public static function getByid($id){
		$sql="select pacientes.id_pacientes, pacientes.nombre, pacientes.ap_paterno, pacientes.ap_materno, c_sexo.id_sexo, c_sexo.sexo, pacientes.fecha_hora_ingreso, pacientes.fecha_nacimiento, pacientes.diagnostico, pacientes.fecha_hora_alta, pacientes.motivo_ingreso, pacientes.motivo_alta, pacientes.fecha_defuncion from pacientes inner join c_sexo on pacientes.id_sexo=c_sexo.id_sexo where id_pacientes=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new PacientesData());

	}


	
	public static function updateById($id,$nombre,$ap_paterno,$ap_materno,$fecha_nac,$fecha_alta,$motivo_alta,$fecha_ingreso,$motivo_ingreso,$fecha_defuncion,$diagnostico){
		$sql="update pacientes set nombre=$nombre, ap_paterno=$ap_paterno, ap_materno=$ap_materno,fecha_nacimiento=$fecha_nac,fecha_hora_ingreso=$fecha_ingreso  where id_pacientes=$id";
		$query = Executor::doit($sql);
		header('Location:./?view=pacientes');

	}


	public function add(){
		
		$sql = "insert into pacientes (nombre, ap_paterno, ap_materno, id_sexo, fecha_nacimiento, fecha_hora_ingreso, motivo_ingreso, diagnostico) ";
		$sql .= "value (\"$this->nombre\",\"$this->ap_paterno\",\"$this->ap_materno\",$this->sexo,'$this->fecha_nac','$this->fecha_ingreso',\"$this->motivo_ingreso\",\"$this->diagnostico\")";
		
		Executor::doit($sql);
}
    

}
?>