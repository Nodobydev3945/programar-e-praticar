<?php
    $host = "localhost";
    $login = "root";
    $password = "";
    $dbname = "dbcadastro";
    
    $conn = new mysqli($host, $login, $password, $dbname, 3306);

    if ($conn -> connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $nome = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $dob = $conn->real_escape_string($_POST['dob']);
    $pass = $conn->real_escape_string($_POST['password']);

    $sql = "INSERT INTO usuarios (nome, email, phone, dob, pass) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssss", $nome, $email, $phone, $dob, $pass);
    
    // Executar a consulta
    if ($stmt->execute()) {
        echo "<script>
                alert('CLIENTE ADICIONADO COM SUCESSO');
                location = 'table-query.php';
              </script>";
    } else {
        echo "Erro ao inserir: " . $stmt->error;
    }
    
    $stmt->close();
    } else {
        echo "Erro na preparação da consulta: " . $conn->error;
    }

// Fechar conexão
$conn->close();
?>