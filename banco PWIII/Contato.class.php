<?php

/**
 *
 */
class Contato{
   
    private $id;
    private $nome;
    private $telefone;
    private $cpf;
    
    private $pdo;



    function __construct(){
        
        $dns = "mysql:dbname = contato;host = localhost";
        $dbuser = "root";
        $dbPass = "";

        try {
            $this->pdo = new PDO($dns,$dbuser,$dbPass);
            return true;
        } catch (Exception $e) {
            return false;
        }
        
       
        
    }


    
    public function getId()
    {
        return $this->id;
    }
    
    public function getNome()
    {
        return $this->nome;
    }

    
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    
    public function getTelefone()
    {
        return $this->telefone;
    }

    
    public function setTelefone($telefone): self
    {
        $this->telefone = $telefone;

        return $this;
    }

  
    public function getCpf()
    {
        return $this->cpf;
    }

   
    public function setCpf($cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

}