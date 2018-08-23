<?php
/**
 * Created by PhpStorm.
 * User: rafael.florindo
 * Date: 20/07/2018
 * Time: 15:52
 */

class Pessoa
{
    private $id, $nome, $telefone, $email, $dataCadastro, $dataAtualizacao;
   
    /*public function set($){ $this-> = $; }*/
    public function setId($id){ $this->id = $id; }
    public function setNome($nome){ $this->nome = $nome; 
    
    /*public function get(){ return $this->$;}*/    
    public function getId(){ return $this->$id; } 
    public function getNome(){ return $this->$Nome;}
    

   
    public function cadastrar(){
        echo "***CADASTRAR CLASSE PESSOA***";
    }
    public function alterar(){
        echo "***ALTERAR CLASSE PESSOA***";
    }
}