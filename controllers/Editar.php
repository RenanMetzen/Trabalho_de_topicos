  
<?php
    require "..\models\Pessoa.class.php";
    echo $_POST['diminuir'];
    $p1 = new Pessoa(null,null,null,null,null,null,null,null, $_POST['diminuir'], $_POST['manter'], $_POST['aumentar']);
    $p1->aumentar;
    $p1->editar($_POST['id']);

    header("location: ../views/admin.php");
?>