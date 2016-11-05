<?php 

include 'dbconfig.php';

class Database{

	protected static $nombre_tabla;
	protected static $db;

	public function __construct(){
		global $db_con;
		static::$db = $db_con;
	}

	public static function buscar_por_sql($sql=""){
		global $db_con;
		$resultado = $db_con->query($sql);
		$array_objeto = array();
		while($columna = $resultado->fetch(PDO::FETCH_ASSOC)){
			$array_objeto[] = static::instanciar($columna);
		}
		return $array_objeto;
	}
	public static function buscar_db($sql=""){
		global $db_con;
		$resultado = $db_con->query($sql)->fetchColumn();
		return $resultado;
	}
	private static function instanciar($record){
		$class_name = get_called_class();
		$objeto = new $class_name;

		foreach ($record as $atributo => $value) {
			if ($objeto->tiene_atributo($atributo)) {
				$objeto->$atributo = $value;
			}
		}
		return $objeto;
	}
	
	public static function count_todo(){
		global $db_con;
		$sql = "SELECT COUNT(*) FROM ".static::$nombre_tabla;
		$resultado = $db_con->query($sql);
		$columna = $resultado->fetch(PDO::FETCH_ASSOC);
		return array_shift($columna);
	}
	public static function buscar_todo(){
		return static::buscar_por_sql("SELECT * FROM ".static::$nombre_tabla);
	}
	
	public static function borrar($id){

		global $db_con;

		$sql = "DELETE FROM ".static::$nombre_tabla." WHERE id = {$id}";
		if($db_con->query($sql)){
			return true;
		}
		else{
			return false;
		}
	}
	public static function buscar_por_ids($array_ids){
		if ($array_ids != '') {
			$idIN = implode(',',$array_ids);
			$result_array = static::buscar_por_sql("SELECT * FROM ".static::$nombre_tabla." WHERE id IN (".$idIN.")");
			return !empty($result_array) ? $result_array : false;
		}
		else{
			return false;
		}
	}

	public static function buscar_por_id($id){
		$result_array = static::buscar_por_sql("SELECT * FROM ".static::$nombre_tabla." WHERE id={$id} LIMIT 1");
		return !empty($result_array) ? array_shift($result_array) : false;
}

	public static function buscar_x_limite($pagina,$items){
		$query = static::$db->prepare("SELECT * FROM productos LIMIT ".($pagina-1) * $items.",".$items);
		$query->execute();
		$columnas = $query->fetchAll();
		return $columnas;
	}

	private function tiene_atributo($atributo){
		$object_vars = $this->atributos();
		return array_key_exists($atributo, $object_vars);
	}

	protected function atributos(){
		return get_object_vars($this);
	}


	// METODO INSERTAR EN LA DB
	// ABSTRAIDO PARA TODAS LAS CLASES
	public function insertar(){

		global $db_con;
		try{
			$atributos = $this->atributos();
			$sql = "INSERT INTO ".static::$nombre_tabla." (";
			$sql .= join(", ", array_keys($atributos));
			$sql .= ") VALUES('";
			$sql .= join("', '", array_values($atributos));
			$sql .= "')";
			if($db_con->query($sql)) { 
				return true;
			}
		}

		catch(Exception $e){
		    echo $e->getMessage();
		    exit;
		}
	}
	// METODO MODIFICAR EN LA DB
	// ABSTRAIDO PARA TODAS LAS CLASES
	public function modificar(){
		global $db_con;

		try{
			$atributos = $this->atributos();
			$atributos_pares = array();
			foreach ($atributos as $key => $value) {
				$atributos_pares[] = "{$key}='{$value}'";
			}
			$sql = "UPDATE ".static::$nombre_tabla." SET ";
			$sql .= join(", ", $atributos_pares);
			$sql .= " WHERE id='".$this->id."'";
			if($db_con->query($sql)) { 
				return true;
			}
		}
		catch(Exception $e){
		    echo $e->getMessage();
		    exit;
		}
	}
}
?>