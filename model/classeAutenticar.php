<?php
session_start();

class Autenticar{
	private $login;
	private $senha;
	private $logado;
    private $nome;
    private $acesso;
    private $id;

	public function __set($name, $value)
    {
        $this->$name = $value;
    }
    public function __get($name)
    {
        return $this->$name;
    }

    /*public function setLogin($login){
        $this->login = $login;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }
    public function getLogin(){
        return $this->login;
    }
    public function getSenha(){
        return $this->senha;
    }*/
	public function getNomeLogin(){
      return $_SESSION["NomeLogin"];
   	}
	public function getLogado(){
      return $_SESSION["logado"];
   	}
    public function getAcesso(){
        return $_SESSION["Acesso"];
    }

	public function logar($login, $senha){
	    $this->login=$login;
        $this->senha=$senha;

		$sql = "SELECT * from autenticacao WHERE login = '$this->login'";
		include ("conexao.php");
		$query = $conectar->query($sql);
		$registros = $query->num_rows;
		
	    if($registros == 1){
         	$d_usuario = $query->fetch_array();
         	if($d_usuario["senha"] == $this->senha){
		        $_SESSION["NomeLogin"] = $d_usuario["nome"];
		        $_SESSION["logado"] = "sim";
                $_SESSION["Acesso"] = $d_usuario["acesso"];
		    	header("Location: ../view/index.php");
		    }else{
            	//echo "erro";
            	header("location: ../view/formLogin.php?mensagem=erro");
         	}
      	}else{
        	header("location: ../view/formLogin.php?mensagem=erro");
  	    }
  	
     
	}
	public function verificarLogado(){
		/*echo $_SESSION["logado"];
		if(!isset($_SESSION["logado"]))
			echo "oi";
		else echo "erro";
		exit();*/
		if(!isset($_SESSION["logado"])){
        	//echo "to aki";
        	header("Location: ../view/formLogin.php");
        	exit();
      	}
   	}
	public function deslogar(){
    	session_destroy();
     	header("Location: ../view/formLogin.php?menssagem=deslogado");
   	}
   	public function cadastrar($login, $senha, $nome, $acesso){
        $this->login=$login;
        $this->senha=$senha;
        $this->nome=$nome;
        $this->acesso=$acesso;


        $sql = "SELECT * from autenticacao WHERE login = '$this->login'";
        include ("conexao.php");
        $query = $conectar->query($sql);
        $registros = $query->affected_rows;

        if($registros == 1){
            header("location: ../view/index.php?pagina=formUsuario.php&mensagem=UsuarioExiste");
        }else{
            $sqlInsert = "insert into autenticacao (nome, login, senha, acesso) VALUE ('$this->nome','$this->login','$this->senha', '$this->acesso')";
            $d_usuario = $conectar->query($sqlInsert);
            $registros = $conectar->affected_rows;

            if($registros == 1){
                header("Location: ../view/index.php?pagina=formUsuario.php&acao=listar&mensagem=sucesso");
            }else{
                //echo "erro";
                header("location: ../view/index.php?pagina=formUsuario.php&acao=listar&mensagem=erro");
            }
        }
    }

    public function alterar($id, $login, $senha, $nome, $acesso){
        $this->id=$id;
        $this->login=$login;
        $this->senha=$senha;
        $this->nome=$nome;
        $this->acesso=$acesso;
        $sql = "update autenticacao set login= '$this->login', senha= '$this->senha', nome= '$this->nome', acesso= '$this->acesso' WHERE id = '$this->id'";

        include ("conexao.php");
        $query = $conectar->query($sql);
        $registros = $conectar->affected_rows;

        if($registros == 1){
            header("location: ../view/index.php?pagina=formUsuario.php&acao=listar&mensagem=sucesso");
        }else{
            header("location: ../view/index.php?pagina=formUsuario.php&acao=listar&mensagem=erro");
        }
    }

    public function buscaDados($id){
        $this->id=$id;


        $sql = "SELECT * from autenticacao WHERE id = '$this->id'";
        include ("conexao.php");
        $query = $conectar->query($sql);
        $registros = $query->num_rows;

        if($registros == 1){
            $dados_usuario = $query->fetch_array();
            return $dados_usuario;
        }else{
            header("location: ../view/formLogin.php?mensagem=erro");
        }
    }
    public function buscaTodosDados(){
        $sql = "SELECT * from autenticacao";
        include ("conexao.php");
        $query = $conectar->query($sql);
        $registros = $query->num_rows;

        if($registros > 0){
            $v = array();
            while ($dados_usuario = $query->fetch_array()){
                $v[]= $dados_usuario;
            }
            return $v;
        }else{
            header("location: ../view/formLogin.php?mensagem=erro");
        }
    }
}

?>