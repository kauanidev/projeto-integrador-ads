<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM celulares WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  header('Location: index.php');
} else {
  echo "Erro ao excluir: " . $conn->error;
}
