<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
</head>
<body>
<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');



echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

$servername = "54.234.153.24";
$username = "root";
$password = "Senha123";
$database = "meubanco";

// Criar conexão


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$valor_rand1 =  rand(1, 999);
$nome = "Cerveja Cristal Sem Gelo - 350ml";
$preco = 1.50;
$estoque = 10;
$host_name = gethostname();


$query = "INSERT INTO produto (ProdutoID,Nome, Preco, estoque, Host) VALUES ('$valor_rand1' , '$nome', '$preco', '$estoque','$host_name')";


if ($link->query($query) === TRUE) {
  echo "Produto Cadastrado com sucesso!";
} else {
  echo "Error: " . $link->error;
}
</body>
</html>