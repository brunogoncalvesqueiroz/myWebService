<?php 


require_once(__DIR__ . '../../control/Test.php');
require_once(__DIR__ . '../../model/ModelTest.php');
require_once(__DIR__ . '/Dao.php');

class DaoTest extends Dao {

	private $modelTest;

	function __construct(){
		parent::__construct();
	}

	function listarResult(){
		try{
			$this->sql = "SELECT * FROM test";
			$this->prepare();
			$this->executar();
			$row = $this->buscarDoResultadoAssoc();

			$lista = array();
			foreach ($row as $key => $value) {
				
				$this->modelTest = new ModelTest();
				$this->modelTest->setId($row[$key]['id']);
				$this->modelTest->setName($row[$key]['name']);

				$lista[] = $this->modelTest;
			}

			if(!empty($lista)){
				return $lista;
			}else{
				return "não há resgistro";
			}

		} catch (Exception $e) {
	        $this->adicionarErro("Error!: " . $e->getMessage());
	        echo '{"erro":"'.$e->getMessage().'"}';
        }
	}

}