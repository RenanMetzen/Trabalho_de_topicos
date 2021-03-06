<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>API Despesas</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Cálculo de Kcalorias basais</a>
</nav>
<div class="form-row col-md-12">
  <div class="form-group col-md-4"></div>
    <div class="form-group col-md-4" style="display:flex; flex-direction:column; height:600px;justify-content:space-around; id="inputs">
<h4><u>Cadastro:</u></h4>
<div>
      <label for="biotipo">Biotipo</label>
      <select class="form-control" id="biotipo">
        <option value=1>Endomorfo</option>
        <option value=2>Mesomorfo</option>
        <option value=3>Ectomorfo</option>
      </select>
      </div>

      <div>
      <label for="altura">Altura(cm)</label>
      <input class="form-control" id="altura" type="number" name="altura">
      </div>
    
      <div>
      <label for="idade">Idade</label>
      <input class="form-control" id="idade" type="number" name="idade">
      </div>

      <div>
      <label for="peso">Peso(g)</label>
      <input class="form-control" id="peso" type="number" name="peso">
      </div>

      <div>
      <label for="atividade">Atividade Física</label>
      <select class="form-control" id="atividade">
        <option value=1>Sedentário</option>
        <option value=2>Moderada</option>
        <option value=3>Alta</option>
        <option value=4>Extrema</option>
      </select>
      </div>
    </div>
  </div>
</div>
<div class="form-group col-md-4"></div>
</div>
<script src='js/main.js'></script>
</html>