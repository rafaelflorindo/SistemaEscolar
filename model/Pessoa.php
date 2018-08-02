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
    public function __set($name, $value)
    {
        $this->$name = $value;
    }
    public function __get($name)
    {
        return $this->$name;
    }
    public function cadastrar(){
        echo "***CADASTRAR CLASSE PESSOA***";
    }
    public function alterar(){
        echo "***ALTERAR CLASSE PESSOA***";
    }
}