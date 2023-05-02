<?php

class BD{
    private $host= "localhost";
    private $dbname= "db_aula";
    private $post = 3306;
    private $usuario = "root";
    private $senha = "";
    private $db_charset = "utf8";
    
    public function conn(){
        $conn = "mysql:host=$this->host;dbname=$this->dbname;port=$this->port";
        
        return new PDO(
            $conn,
            $this->usuario,
            $this->senha,
            [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES" .this->db_charset]
        );   
    }
    
    public function inserir($dados){
        $conn = $this->conn();
        $sql= "INSERT INTO contato(nome, email, telefone) VALUES( ?, ?, ?);";
        $st = $conn->prepare($sql);
        $st-> execute($dados['nome'],$dados['email'],$dados['telefone'], );
    }
}

?>