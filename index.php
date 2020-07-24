<?php
    $result = 0;
    $validate = 1;
    $value1 = $_POST['value1'];
    $value2 = $_POST['value2'];

    if(is_numeric($value1) && is_numeric($value2)){
        if (isset($_POST['btnSum'])) {
            $result = $value1 + $value2;
        } 
        if (isset($_POST['btnSub'])) {
            $result = $value1 - $value2;
        } 
        if (isset($_POST['btnMult'])) {
            $result = $value1 * $value2;
        } 
        if (isset($_POST['btnDiv'])) {
            if($value2==0){
                $validate = 0;
                $error_msg = 'Não é possível divisão por zero...Tente novamente';
            }else{
                $result = $value1 / $value2;
            }
        } 
    }else{
        if($value1=='' && $value2==''){
            $validate = 1;
        }else{
            $validate = 0;
            $error_msg = 'Ops! Você precisa adicionar números para calcular...';
        }
    }
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
        <div class="container d-flex justify-content-center">
            <form action="index.php" method="post">
                <h2 class="text-center font-weight-bold mb-4"> Calculadora PHP </h2>
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
                        <span class="error"><?php if($validate == 0){ echo $error_msg; } ?></span>
                    </div>
                </div>
                
                <div class="form-row mt-1">
                    <div class="col d-flex justify-content-center">
                        <button type="submit" class="m-2 btn-lg btn-success" name="btnSum">+</button>
                        <button type="submit" class="m-2 btn-lg btn-danger" name="btnSub">-</button>
                        <button type="submit" class="m-2 btn-lg btn-info" name="btnMult">*</button>
                        <button type="submit" class="m-2 btn-lg btn-warning" name="btnDiv">/</button>  
                    </div>
                </div>
                
                <div class="form-row mt-1">
                    <div class="col d-flex justify-content-center">
                        <span class="result"> Resultado:  <?php echo $result ?> </span>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>