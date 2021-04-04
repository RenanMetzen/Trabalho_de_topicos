  
<?php
    require "..\models\Pessoa.class.php";

    $metabolismo = 0;
    if ($_POST["sexo"]==1){
        $metabolismo = 665.1 + (9.56 * $_POST["peso"]) + (1.8 * $_POST["altura"]) - (4.7 * $_POST["idade"]);
    } else {
        $metabolismo = 66.5 + (13.75 * $_POST["peso"]) + (5 * $_POST["altura"]) - (6.8 * $_POST["idade"]);
    }

    $altura = 0;
    if($_POST["altura"]<140){
        $altura = 1;
    } elseif($_POST["altura"]<150){
        $altura = 2;
    } elseif($_POST["altura"]<160){
        $altura = 3;
    } elseif($_POST["altura"]<170){
        $altura = 4;
    } elseif($_POST["altura"]<180){
        $altura = 5;
    } elseif($_POST["altura"]<190){
        $altura = 6;
    } elseif($_POST["altura"]<200){
        $altura = 7;
    } else {
        $altura = 8;
    }

    $peso = 0;
    if($_POST["peso"]<60){
        $peso = 1;
    } elseif($_POST["peso"]<70){
        $peso = 2;
    } elseif($_POST["peso"]<80){
        $peso = 3;
    } elseif($_POST["peso"]<90){
        $peso = 4;
    } elseif($_POST["peso"]<100){
        $peso = 5;
    } elseif($_POST["peso"]<110){
        $peso = 6;
    } else {
        $peso = 7;
    }

    $idade = 0;
    if($_POST["idade"]<13){
        $idade = 1;
    } elseif($_POST["idade"]<19){
        $idade = 2;
    } elseif($_POST["idade"]<29){
        $idade = 3;
    } elseif($_POST["idade"]<49){
        $idade = 4;
    } elseif($_POST["idade"]<69){
        $idade = 5;
    } else{
        $idade = 6;
    }

    $pessoas = Pessoa::listaCom($_POST["sexo"]);
    $diminuir = 'null';
    $manter = 'null';
    $aumentar = 'null';
    $melhor_d = 4;
    foreach($pessoas as $pessoa){
        $diferença_altura = $pessoa->altura - $altura;
        if ($diferença_altura<0){
            $diferença_altura*=-1;
        }
        $diferença_peso = $pessoa->peso - $peso;
        if ($diferença_peso<0){
            $diferença_peso*=-1;
        }
        $diferença_idade = $pessoa->idade - $idade;
        if ($diferença_idade<0){
            $diferença_idade*=-1;
        }
        $diferença_atividade = $pessoa->atividade_fisica - $_POST['atividade_fisica'];
        if ($diferença_atividade<0){
            $diferença_atividade*=-1;
        }
        
        $distancia = 4*$diferença_idade + $diferença_peso + $diferença_altura + 2*$diferença_atividade;
        if ($distancia <= $melhor_d){
            $melhor_d = $distancia;
            $aumentar = $pessoa->aumentar;
            $diminuir = $pessoa->diminuir;
            $manter = $pessoa->manter;
        } 
    }

    $p1 = new Pessoa(null, $_POST['nome'], $_POST["sexo"], $peso, $altura, $idade, $_POST['atividade_fisica'], $metabolismo, $diminuir, $manter, $aumentar);
    $p1->inserir();

    if ($manter != 'null'){
        header("location: ../views/resposta.php?metabolismo=".$metabolismo."&manter=".$manter."&aumentar=".$aumentar."&diminuir=".$diminuir."");
    }else {
        header("location: ../views/cadastro.php");
    }
    
?>