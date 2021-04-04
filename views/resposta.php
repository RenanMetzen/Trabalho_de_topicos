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
    <div class="form-group">
        <h4>Metabolismo Basal: <?php echo $_GET['metabolismo']; ?></h4>
    </div>
    <div class="form-group">
        <h4>Calorias necessárias para manter o peso: <?php echo $_GET['manter']; ?></h4>
    </div>
    <div class="form-group">
        <h4>Calorias necessárias para aumentar o peso: <?php echo $_GET['aumentar']; ?></h4>
    </div>
    <div class="form-group">
        <h4>Calorias necessárias para diminuir o peso: <?php echo $_GET['diminuir']; ?></h4>
    </div>
    <a href="../views/cadastro.php">Voltar para o cadastro</button>
</div>
    <div class="text-center p-3 bg-dark text-white" style="background-color: rgba(0, 0, 0, 0.2);">
        <b>Autores:</b> João, Renan, Ruan, Thiago e Thomas
    </div>
</div>
</body>
</html>