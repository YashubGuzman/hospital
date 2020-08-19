<?php
class SexoData {
	public static $tablename = "c_sexo";



	public function PacientesData(){
		$this->name = "";
		$this->lastname = "";
		$this->email = "";
		$this->image = "";
		$this->password = "";
		$this->created_at = "NOW()";
    }



    public static function getAll(){
		$sql="select * from c_sexo";
		$query = Executor::doit($sql);
		return Model::many($query[0],new PacientesData());
	}
    

}
?>