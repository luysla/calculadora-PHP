<?php
    $value1 = $_POST['value1'];
    $value2 = $_POST['value2'];

    $result = $value1 + $value2;
    
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Calculadora PHP</title>
</head>
<body>
    <h3 class="text-center font-weight-bold mt-5"> Calculadora PHP </h3>
    <div class="container d-flex justify-content-center mt-5">
        <form action="index.php" method="post">
            <div class="form-row">
                <div class="col-md-6 mt-1">
                    <input type="text" class="form-control" name="value1" placeholder="Valor 1" required>
                </div>
                <div class="col-md-6 mt-1"> 
                    <input type="text" class="form-control" name="value2" placeholder="Valor 2" required>
                </div>
                
            </div>
            
            <div class="form-row mt-1">
                <div class="col d-flex justify-content-center">
                    <button type="submit" class="m-2 btn-lg btn-success">+</button>
                    <button type="submit" class="m-2 btn-lg btn-danger">-</button>
                    <button type="submit" class="m-2 btn-lg btn-info">*</button>
                    <button type="submit" class="m-2 btn-lg btn-warning">/</button>  
                </div>
            </div>
            
            <div class="form-row mt-1">
                <div class="col d-flex justify-content-center">
                    <span> Resultado:  <?php  echo $result ?> </span>
                </div>
                </div>
            </form>
            
        </div>
</body>
</html>