 <<?php

  $HOST = 'localhost';
  $USER = 'root';
  $PASS = '';
  $BASE = 'cadastro';

  // conectando ao banco com PDO
  try {
    $conn = new PDO("mysql:host=$HOST; dbname=$BASE", $USER, $PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo "Erro na conexão com o banco de dados: " . $e->getMessage();
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pega os dados enviados pelo formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];


    // Prepara e executa a consulta para inserir os dados na tabela
    $stmt = $conn->prepare("INSERT INTO dados_login (nome, email) VALUES (:nome, :email)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    echo "Dados salvos com sucesso!";
  }
