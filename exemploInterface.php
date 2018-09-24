<?php
interface InterfaceEquipamentos{
//contrato, ela obriga o desenvolvedor a implementar tudo o que estiver dentro da interfafce
	//public $id, $nome
	public function setId($id);
	public function getId();
	/*
	public function cadastrar($xxxx, $xxx);
	public function alterar($xxxx, $xxx);
	public function listarGeral($x);
	public function buscar($xxxx);
	
	public function realizarEmprestimo($xxxx, $xxx);
	public function devolverEmprestimo($xxxx, $xxx);
	public function cancelarEmprestimo($xxxx, $xxx);
	*/
}

class Equipamento implements InterfaceEquipamentos{
	private $id;
	public function setId($id){
		$this->id=$id;
	}
	public function getId(){
		return $this->id;	
	}
}

$obj=new Equipamento();
$obj->setId(10);
echo $obj->getId();
?>