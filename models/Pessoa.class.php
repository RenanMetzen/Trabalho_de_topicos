<?php
include "..\db\MySQL.class.php";

class Pessoa{
    private $id;
    private $nome;
    private $biotipo;
    private $altura;
    private $idade;
    private $peso;
    private $atividade_fisica;

    public function __construct($id = null, $nome = null, $biotipo = null, $altura = null, $idade = null, $peso = null, $atividade_fisica = null){
        $this->id = $id;
        $this->nome = $nome;
        $this->nome = $biotipo;
        $this->nome = $altura;
        $this->nome = $idade;
        $this->nome = $peso;
        $this->nome = $atividade_fisica;
    }
    
    public function __set($atributo,$valor){
        $this->$atributo = $valor;
    }

    public function __get($atributo){
        return $this->$atributo;
    }

    public function inserir(){
        $conexao = new MySQL();
        $sql = "insert 
                into pessoas (id, nome, biotipo, altura, idade, peso, atividade_fisica)
                values
                (".$this->id.",'".$this->nome."',".$this->biotipo.",".$this->altura.",".$this->idade.",".$this->peso.",".$this->atividade_fisica.")";
        $conexao->executa($sql);
    }
}