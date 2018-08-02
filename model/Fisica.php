<?php
/**
 * Created by PhpStorm.
 * User: rafael.florindo
 * Date: 20/07/2018
 * Time: 15:53
 */
require_once ("Pessoa.php");
class Fisica extends Pessoa
{
    private $id, $cpf, $rg, $dataNascimento, $dataAtualizacao, $idPessoa;

    public function cadastrar(){
        //aplicando o polimorfismo: que significa ter a capacidade de sobrescrever métodos das superclasses nas subclasses. Isso significa que você poderá ter métodos de mesmo nome na superclasse e subclasse, porém, com ações diferentes.
        parent::cadastrar();//chama o método da classe pai/superclasse/classe mae e executa tudo o que foi programado,
        echo "***CADASTRAR CLASSE FISICA***";
    }
    public function alterar(){
        //aplicando o polimorfismo: que significa ter a capacidade de sobrescrever métodos das superclasses nas subclasses. Isso significa que você poderá ter métodos de mesmo nome na superclasse e subclasse, porém, com ações diferentes.
        parent::cadastrar();//chama o método da classe pai/superclasse/classe mae e executa tudo o que foi programado,
        echo "***ALTERAR CLASSE FISICA***";
    }
}
$teste = new Fisica();
$teste->cadastrar();

$teste->nome="Rafael";
echo $teste->nome;