<?php
session_start();

if(isset($_POST["login"]) && isset($_POST["senha"])) {
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    if($login === "portaria" && $senha === "FatecAraras") {
        $_SESSION["autenticado"] = true;
        header("Location: cadastrar.php");
        exit();
    } else {
        $mensagem_login = "Login ou senha incorretos. Tente novamente.";
    }
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
         <p>Para verificar se o veículo está cadastrado, é necessário realizar o login</p>
      </div>
      <!-- Definindo a Section do Form -->
      <section class="vh-100">
         <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
               <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                  <div class="card shadow-2-strong" style="border-radius: 2rem;">
                     <div class="card-body p-5 text-center">
                        <!-- FORMULÁRIO METHOD POST -->
                           <div class="form-group">
                           <a class="btn btn-outline-primary" href="./consulta.php" role="button">Área Portaria - Cadastro Veículo</a>
                           </div>
                           <div class="form-group" style="padding: 2rem;">
                              <a class="btn btn-outline-primary" href="./consulta.php" role="button">Área Portaria - Consulta Veículo</a>
                           </div>
                           <a class="btn btn-primary" href="/" role="button">Voltar</a>

                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>