<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora de Distância</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <style>   
    body, html {
      height: 100%;
      background-color: Snow;
    }
  </style>
</head>
<body>

<div class="container">

  <div class="row mt-5 mb-5">    
    <div class="col-md-8 offset-md-2"> 
        <h1 class="text-center">Calculadora de Distância entre Coordenadas</h1>
    </div>
  </div>

  <div class="row">    
    <div class="col-md-8 offset-md-2">      
      <form method="post" action="process.php">
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="latitude1">Latitude 1</label>
              <input type="text" class="form-control" id="latitude1" name="latitude1" placeholder="Digite a latitude 1" required>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="longitude1">Longitude 1</label>
              <input type="text" class="form-control" id="longitude1" name="longitude1" placeholder="Digite a longitude 1" required>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col">
            <div class="form-group">
              <label for="latitude2">Latitude 2</label>
              <input type="text" class="form-control" id="latitude2" name="latitude2" placeholder="Digite a latitude 2" required>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="longitude2">Longitude 2</label>
              <input type="text" class="form-control" id="longitude2" name="longitude2" placeholder="Digite a longitude 2" required>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary btn-block">Calcular Distância</button>
          </div>
        </div>      
      </form>     
    </div>
  </div>

  <?php if (isset($_SESSION['distancia'])) { ?> 
  <div class="row mt-5">    
    <div class="col-md-8 offset-md-2">
        <p class="text-center bg-success pt-3 pb-3 font-weight-bold text-white">
          A distância entre as coordenadas fornecidas é de aproximadamente <?php echo round($_SESSION['distancia'], 2); ?> km.
        </p>
    </div>
  </div>
  <?php
        unset($_SESSION['distancia']);
    }
  ?>     
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

