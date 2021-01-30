<?php
class NotasData {
	public static $tablename = "notas";

	public function NotasData(){
		$this->motivo = "";
		$this->descripcion = "";
		$this->created_at = "NOW()";
	}

	//public function getNotas(){ return NotasData::getById($this->category_id);}

	public function add(){
		$sql = "insert into ".self::$tablename." (motivo,descripcion,created_at) ";
		$sql .= "value (\"$this->motivo\",\"$this->descripcion\",NOW())"; // sino funciona quitar la contradiagonal que sigue de unit
		return Executor::doit($sql);
	}
	
	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto NotasData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set motivo=\"$this->motivo\",descripcion=\"$this->descripcion\",is_active=\"$this->is_active\" where id=$this->id";
		Executor::doit($sql);
	}


	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new NotasData());

	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new NotasData());
	}


	public static function getAllByPage($start_from,$limit){
		$sql = "select * from ".self::$tablename." where id>=$start_from limit $limit";
		$query = Executor::doit($sql);
		return Model::many($query[0],new NotasData());
	}


	public static function getLike($p){
		$sql = "select * from ".self::$tablename." where barcode like '%$p%' or name like '%$p%' or id like '%$p%' or description like '%$p%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new NotasData());
	}

}

?>