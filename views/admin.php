

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html lang="en" style="padding:0; min-height: 100vh; box-sizing: border-box; margin: 0;">
<head>
  <title>API Despesas</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="padding:0; min-height: 100vh; box-sizing: border-box; margin: 0;">
<div style="display:flex; height:100%; flex-direction:column; justify-content:space-between;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
      <h4>Casos sem solução:</h4>
</nav>
<div class="form-group col-md-4 container-fluid" style="padding:10; height:100%; border-bottom-style: solid;">
    
    <form method="POST" action="../controllers/Editar.php">
    <?php
        require "..\models\Pessoa.class.php";

        $pessoas = Pessoa::listaSem();

        if (count($pessoas)>0){

            if ($pessoas[0]->peso ==1 ){
                $peso = "Menos de 60 kg";
            } elseif ($pessoas[0]->peso ==2 ){
                $peso = "Entre 60 e 69 kg";
            } elseif ($pessoas[0]->peso ==3 ){
                $peso = "Entre 70 e 79 kg";
            } elseif ($pessoas[0]->peso ==4 ){
                $peso = "Entre 80 e 89 kg";
            } elseif ($pessoas[0]->peso ==5 ){
                $peso = "Entre 90 e 99 kg";
            } elseif ($pessoas[0]->peso ==6 ){
                $peso = "Entre 100 e 109 kg";
            } else{
                $peso = "Mais de 110 kg";
            } 
            
            if ($pessoas[0]->sexo ==1 ){
                $sexo = "Feminino";
            } else{
                $sexo = "Masculino";
            }

            if ($pessoas[0]->altura ==1 ){
                $altura = "Menos de 140 cm";
            } elseif ($pessoas[0]->altura ==2 ){
                $altura = "Entre 140 e 149 cm";
            } elseif ($pessoas[0]->altura ==3 ){
                $altura = "Entre 150 e 159 cm";
            } elseif ($pessoas[0]->altura ==4 ){
                $altura = "Entre 160 e 169 cm";
            } elseif ($pessoas[0]->altura ==5 ){
                $altura = "Entre 170 e 179 cm";
            } elseif ($pessoas[0]->altura ==6 ){
                $altura = "Entre 180 e 189 cm";
            } elseif ($pessoas[0]->altura ==7 ){
                $altura = "Entre 190 e 199 cm";
            } else{
                $altura = "Mais de 200 cm";
            } 

            if ($pessoas[0]->idade ==1 ){
                $idade = "Menos de 13 anos";
            } elseif ($pessoas[0]->idade ==2 ){
                $idade = "Entre 13 e 18 anos";
            } elseif ($pessoas[0]->idade ==3 ){
                $idade = "Entre 19 e 29 anos";
            } elseif ($pessoas[0]->idade ==4 ){
                $idade = "Entre 30 e 49 anos";
            } elseif ($pessoas[0]->idade ==5 ){
                $idade = "Entre 50 e 69 anos";
            } else{
                $idade = "Mais de 70 anos";
            } 

            if ($pessoas[0]->atividade_fisica ==1 ){
                $atividade = "Sedentario";
            } elseif ($pessoas[0]->atividade_fisica ==2 ){
                $atividade = "Moderada";
            } elseif ($pessoas[0]->atividade_fisica ==3 ){
                $atividade = "Alta";
            } else{
                $atividade = "Extrema";
            } 


            echo '<div class="form-group">
                ID: <input name ="id" value='.$pessoas[0]->id.' invisible readonly style = "border-color: rgba(0,0,0,0);">
                <h5>Nome: '.$pessoas[0]->nome.'</h5>
                <h5>Peso: '.$peso.'</h5>
                <h5>Sexo: '.$sexo.'</h5>
                <h5>Idade: '.$idade.'</h5>
                <h5>Altura: '.$altura.'</h5>
                <h5>Atividade Física: '.$atividade.'</h5>
                <h5>Metabolismo Basal: '.$pessoas[0]->metabolismo.'</h5>
                <h5>Calorias necessarias para manter o peso:</h5>
                <input class="form-control" id="manter" type="number" step="0.01" name="manter" required>
                <h5>Calorias necessarias para aumentar o peso:</h5>
                <input class="form-control" id="aumentar" type="number" step="0.01" name="aumentar" required>
                <h5>Calorias necessarias para diminuir o peso:</h5>
                <input class="form-control" id="diminuir" type="number" step="0.01" name="diminuir" required>
            </div>';

        } else{
            echo '<div class="form-group">
            <h5> Não há resultados. </h5>
            </div>';
        }
    ?>
    <button type="submit" class="btn btn-primary float-right">Atualizar</button>
    </form>
</div>
    <div class="text-center p-3 bg-dark text-white" style="background-color: rgba(0, 0, 0, 0.2);">
        <b>Autores:</b> João, Renan, Ruan, Thiago e Thomas
    </div>
</div>
</body>
</html>