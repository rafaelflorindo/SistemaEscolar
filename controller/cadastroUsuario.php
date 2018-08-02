<?php

include("../model/classeAutenticar.php");
if(filter_input(INPUT_POST,"operacao")=="cadastrar"){
    if (filter_input(INPUT_POST,"login") && filter_input(INPUT_POST,"senha") && filter_input(INPUT_POST,"nome") && filter_input(INPUT_POST,"acesso")){
        $login = filter_input(INPUT_POST,"login");
        $senha = filter_input(INPUT_POST,"senha");
        $nome = filter_input(INPUT_POST,"nome");
        $acesso = filter_input(INPUT_POST,"acesso");
        $objLogin = new Autenticar;
        $objLogin -> cadastrar($login, $senha, $nome, $acesso);
    }else{
        echo "Erro entre View e Controller";
    }
}elseif(filter_input(INPUT_POST,"operacao")=="alterar"){
    if (filter_input(INPUT_POST,"id") && filter_input(INPUT_POST,"login") && filter_input(INPUT_POST,"senha") && filter_input(INPUT_POST,"nome") && filter_input(INPUT_POST,"acesso")){
        $id = filter_input(INPUT_POST,"id");
        $login = filter_input(INPUT_POST,"login");
        $senha = filter_input(INPUT_POST,"senha");
        $nome = filter_input(INPUT_POST,"nome");
        $acesso = filter_input(INPUT_POST,"acesso");
        $objLogin = new Autenticar;
        $objLogin -> alterar($id, $login, $senha, $nome, $acesso);
    }else{
        echo "Erro entre View e Controller";
    }
}






?>