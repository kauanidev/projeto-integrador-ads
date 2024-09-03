<?php
include 'config.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $marca = $_POST['marca'];
  $modelo = $_POST['modelo'];
  $preco = $_POST['preco'];

  $sql = "UPDATE celulares SET marca='$marca', modelo='$modelo', preco='$preco' WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
  } else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
  }
}

$result = $conn->query("SELECT * FROM celulares WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Celular</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <h1>Editar Celular</h1>
  <form method="POST">
    <label for="marca">Marca:</label>
    <input type="text" name="marca" value="<?php echo $row['marca']; ?>" required>

    <label for="modelo">Modelo:</label>
    <input type="text" name="modelo" value="<?php echo $row['modelo']; ?>" required>

    <label for="preco">Preço (R$):</label>
    <input type="number" name="preco" step="0.01" value="<?php echo $row['preco']; ?>" required>

    <button type="submit" class="btn">Atualizar</button>
  </form>
</body>

</html>