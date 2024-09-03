<?php
include 'config.php';

$result = $conn->query("SELECT * FROM celulares");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loja de Celulares</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <header>
    <h1>Celulares Disponíveis</h1>
    <a href="create.php" class="btn">Adicionar Novo Celular</a>
  </header>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Preço (R$)</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['marca']; ?></td>
          <td><?php echo $row['modelo']; ?></td>
          <td><?php echo $row['preco']; ?></td>
          <td>
            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn">Editar</a>
            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn">Excluir</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</body>

</html>