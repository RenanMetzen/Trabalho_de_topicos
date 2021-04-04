<?php
include "..\db\MySQL.class.php";

class Pessoa{
    private $id;
    private $nome;
    private $sexo;
    private $altura;
    private $idade;
    private $peso;
    private $atividade_fisica;
    private $metabolismo;
    private $aumentar;
    private $manter; 
    private $diminuir;

    public function __construct($id = null, $nome, $sexo, $peso, $altura, $idade, $atividade_fisica, $metabolismo, $diminuir, $manter, $aumentar){
        $this->id = $id;
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->altura = $altura;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->atividade_fisica = $atividade_fisica;
        $this->metabolismo = $metabolismo;
        $this->diminuir = $diminuir;
        $this->manter = $manter;
        $this->aumentar = $aumentar;
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
                into pessoa (nome, sexo, peso, altura, idade, atividade, metabolismo, diminuir, manter, aumentar)
                values
                ('".$this->nome."',".$this->sexo.",".$this->peso.",".$this->altura.",".$this->idade.",".$this->atividade_fisica.",".$this->metabolismo.",".$this->diminuir.",".$this->manter.",".$this->aumentar.")";
        echo $sql;
        $conexao->executa($sql);
    }

    public static function listaCom($sexo){
        $conexao = new MySQL();
		$sql = "SELECT * FROM pessoa WHERE sexo  = ".$sexo;
		$resultados = $conexao->consulta($sql);
		if(!empty($resultados)){
            $pessoas = array();
            foreach($resultados as $resultado){
                if($resultado['manter']!=null && $resultado['aumentar']!=null && $resultado['diminuir']!=null){
                    $pessoa = new Pessoa($resultado['id'], $resultado['nome'], $sexo, $resultado['peso'], $resultado['altura'], $resultado['idade'], $resultado['atividade'], $resultado['metabolismo'], $resultado['diminuir'], $resultado['manter'], $resultado['aumentar']);
                    $pessoas[] = $pessoa;
                }
            }
            return $pessoas;
        }else{
            return false;
        }
    }
}