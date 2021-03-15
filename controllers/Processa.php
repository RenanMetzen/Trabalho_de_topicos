  
<?php
    require "..\models\Pessoa.class.php";
    echo $_POST["nome"];
    echo $_POST["biotipo"];
    echo $_POST["peso"];
    echo $_POST["altura"];
    echo $_POST["idade"];
    echo $_POST["atividade_fisica"];
    
    $p1 = new Pessoa(null,$_POST['nome'],$_POST['biotipo'],$_POST['altura'],$_POST['idade'],$_POST['peso'],$_POST['atividade_fisica']);
    $p1->inserir();
    header("location: ../views/cadastro.php");
?>