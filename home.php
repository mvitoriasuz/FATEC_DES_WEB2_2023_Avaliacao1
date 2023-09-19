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
         <p>Para ter acesso ao cadastro de véiculo, é necessário realizar o login</p>
      </div>    
      <section class="vh-100">
         <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
               <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                  <div class="card shadow-2-strong" style="border-radius: 2rem;">
                     <div class="card-body p-5 text-center">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <h3 class="mb-5">Acesso para Cadastrar Veiculos</h3>
                        <div class="form-outline mb-4">
                            <label for="login" class="form-label">Usuário</label>
                            <input type="text" name="login" class="form-control form-control-lg" value="portaria" />      
                            <span class="help-block"></span>
                        </div>
                        <div class="form-outline mb-4">
                              <label for="senha" class="form-label">Senha</label>
                              <input type="password" name="senha" class="form-control form-control-lg" value="FatecAraras" />      
                              <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-outline-primary" value="Entrar">
                            <a class="btn btn-outline-danger" href="./index.php" role="button">Voltar</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <?php if(isset($mensagem_login)) { echo $mensagem_login; } ?>
</body>
</html>
