<?php
session_start(); 

if(!isset($_SESSION["autenticado"]) || $_SESSION["autenticado"] !== true) {
    header("Location: home.php");
    exit();
}   

if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    if($_POST['login'] == 'portaria' and $_POST['senha'] == 'Fatecararas'){
        $_SESSION['autenticado'] = TRUE;
        $_SESSION["login"] = 'portaria';
         header("location: consulta.php");
    } else {
        $_SESSION['autenticado'] = FALSE;
    }
}

function registros_consulta() {
    $cadastros = [];
    $arquivo = fopen('veiculo_cadastrado.txt', 'r');
    
    if ($arquivo) {
        while (($linha = fgets($arquivo)) !== false) {
            $dados = explode('|', $linha);
            if (count($dados) === 3) {
                $cadastros[] = ['Nome' => trim($dados[0]), 'RA' => trim($dados[1]), 'Placa' => trim($dados[2])];
            }
        }
        fclose($arquivo);
    }
    return $cadastros;
}

$cadastros = registros_consulta();
?>
