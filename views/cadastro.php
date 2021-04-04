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
      <h4>Cálculo de Calorias basais</h4>
</nav>
    <div class="form-group col-md-4 container-fluid" style="padding:10; height:100%; border-bottom-style: solid;">
      <h3 style="text-align:center;"><b>Cadastro:</b></h3>
      
      <form method="POST" action="../controllers/Processa.php">
      
      <div class="form-group">
        <label for="nome">Nome</label>
        <input class="form-control" id="nome" type="text" name="nome" required placeholder="Nome">
      </div>

      <div class="form-group">
        <label for="biotipo">Sexo</label>
        <select class="form-control" name="sexo" required id="sexo">
          <option value=0 disabled selected>Selecione seu sexo</option>
          <option value="1">Feminino</option>
          <option value="2">Masculino</option>
        </select>
      </div>

      <div class="form-group">
        <label for="nome">Altura</label>
        <input class="form-control" id="altura" type="int" name="altura" required placeholder="Altura (cm)">
      </div>

      <div class="form-group">
        <label for="nome">Idade</label>
        <input class="form-control" id="idade" type="int" name="idade" required placeholder="Idade">
      </div>

      <div class="form-group">
        <label for="nome">Peso</label>
        <input class="form-control" id="peso" type="int" name="peso" required placeholder="Peso (kg)">
      </div>
      <div class="form-group">
        <label for="atividade">Atividade Física</label>
        <select class="form-control" required name="atividade_fisica" id="atividade_fisica">
          <option value=0 disabled selected>Selecione a sua frequência de atividade física</option>
          <option value=1>Sedentário</option>
          <option value=2>Moderada</option>
          <option value=3>Alta</option>
          <option value=4>Extrema</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary float-right">Cadastrar</button>
      </form>
    </div>
    
    <div class="text-center p-3 bg-dark text-white" style="background-color: rgba(0, 0, 0, 0.2);">
    <b>Autores:</b> João, Renan, Ruan, Thiago e Thomas
    </div>
  </div>
</body>
</html>