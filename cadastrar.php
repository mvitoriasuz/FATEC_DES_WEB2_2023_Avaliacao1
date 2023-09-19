<?php
session_start();

if(!isset($_SESSION["autenticado"]) || $_SESSION["autenticado"] !== true) {
    header("Location: index.php");
    exit();
}   

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $ra = $_POST["ra"];
    $placa = $_POST["placa"];

    $nome = htmlspecialchars($nome);
    $ra = htmlspecialchars($ra);
    $placa = htmlspecialchars($placa);

    $registro = "$nome|$ra|$placa\n";

    file_put_contents("veiculo_cadastrado.txt", $registro, FILE_APPEND);
    $mensagem_login = "Cadastro realizado com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Estácionamento Fatec Araras</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <!-- Style do site -->
      <style type="text/css">
         body{ font: 14px sans-serif; background-color: #B20000;}
         .saudacoes{ padding: 10px; color: #ffff;}
         .btn-primary{background-color: #083391;}
      </style>
</head>
<body>
<div class="saudacoes" style="text-align: center;">
         <h3>Estácionamento Fatec Araras</h3>
         <p>Realize o cadastro do veículo</p>
      </div>    
      <section class="vh-100">
         <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
               <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                  <div class="card shadow-2-strong" style="border-radius: 2rem;">
                     <div class="card-body p-5 text-center">
                     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                     <h3 class="mb-5">Cadastro de Veículo</h3>
                     <div class="form-outline mb-4">
                        <label for="nome" class="form-label">Nome completo:</label>
                        <input type="text" name="nome" class="form-control form-control-lg" value="" />      
                        <span class="help-block"></span>
                        </div>
                    <div class="form-outline mb-4">
                        <label for="ra" class="form-label">Registro Acadêmico (R.A.):</label>
                        <input type="text" name="ra" class="form-control form-control-lg" value="" />      
                        <span class="help-block"></span>
                    </div>
                    <div class="form-outline mb-4">
                        <label for="placa" class="form-label">Placa do Carro ou Moto:</label>
                        <input type="text" name="placa" class="form-control form-control-lg" value="" />      
                        <span class="help-block"></span>
                    </div>
                    <?php if(isset($mensagem_login)) { echo $mensagem_login; } ?>

                    <div class="form-group" style="padding: 2rem;">
                        <input type="submit" class="btn btn-outline-primary" value="Cadastrar">
                        <a class="btn btn-outline-danger" href="logout.php" role="button">Encerrar Sessão</a>


                    </div>
                     </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
