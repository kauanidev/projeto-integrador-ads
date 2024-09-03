<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $marca = $_POST['marca'];
  $modelo = $_POST['modelo'];
  $preco = $_POST['preco'];

  $sql = "INSERT INTO celulares (marca, modelo, preco) VALUES ('$marca', '$modelo', '$preco')";

  if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
  } else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar Celular</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <h1>Adicionar Novo Celular</h1>
  <form method="POST">
    <label for="marca">Marca:</label>
    <input type="text" name="marca" required>

    <label for="modelo">Modelo:</label>
    <input type="text" name="modelo" required>

    <label for="preco">Preço (R$):</label>
    <input type="number" name="preco" step="0.01" required>

    <button type="submit" class="btn">Salvar</button>
  </form>
</body>

</html>