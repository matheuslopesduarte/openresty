<?php
// Pega o código de erro passado pelo Nginx
$error_code = $_SERVER['ERROR_CODE'];

// Definir uma mensagem de erro baseada no código
switch ($error_code) {
    case 400:
        $error_message = "Requisição inválida.";
        break;
    case 401:
        $error_message = "Não autorizado.";
        break;
    case 403:
        $error_message = "Acesso proibido.";
        break;
    case 404:
        $error_message = "Página não encontrada.";
        break;
    case 500:
        $error_message = "Erro interno do servidor.";
        break;
    case 502:
        $error_message = "Bad gateway.";
        break;
    case 503:
        $error_message = "Serviço indisponível.";
        break;
    case 504:
        $error_message = "Gateway timeout.";
        break;
    default:
        $error_message = "Erro desconhecido.";
}

// Exibe a mensagem de erro
echo "<h1>Erro $error_code</h1>";
echo "<p>$error_message</p>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main class="bsod container">
  <h1 class="neg title"><span class="bg">Error - 404</span></h1>
  <p>An error has occured, to continue:</p>
  <p>* Return to our homepage.<br />
  * Send us an e-mail about this error and try later.</p>
  <nav class="nav">
    <a href="#" class="link">index</a>&nbsp;|&nbsp;<a href="#" class="link">webmaster</a>
  </nav>
</main>
</body>
</html>

