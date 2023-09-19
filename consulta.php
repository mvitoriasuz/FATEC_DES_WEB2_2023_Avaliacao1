<?php
include_once("parametros.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Estácionamento Fatec Araras</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <!-- Style do site -->
      <style type="text/css">
         body{ font: 14px sans-serif; background-color: #B20000;}
         .cabecalho{ padding: 10px; color: #ffff;}
         .btn-primary{background-color: #083391;}
      </style>
</head>
<body>
<div class="cabecalho" style="text-align: center;">
         <h3>Realizar consulta de veículos cadastrados no Estácionamento da Fatec Araras</h3>
</div>   
<div class="container">
        <table class="table">
            <thead class="table-light">
            <th>Nome</th>
            <th>R.A.</th>
            <th>Placa</th>
            </thead>
            <?php foreach ($cadastros as $cadastros): ?>
            <tr>
                <td><?php echo $cadastros['Nome']; ?></td>
                <td><?php echo $cadastros['RA']; ?></td>
                <td><?php echo $cadastros['Placa']; ?></td>
            </tr>
        <?php endforeach; ?>
            </table>

            </div> 
</body>
</html>