<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="second-style.css">
    <title>Tabela de Cadastros</title>
    <style>
        .sidenav {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        nav {
            width: 50vh;
        }
        button{
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
            background-color: cornflowerblue;
        }
        input[type="text"] {
            width: 50%;
            padding: 9px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1.0em;
        }
    </style>
</head>
<body>
    <header class="head">
        <div class="sidenav">
            <h1>FILTRO</h1>
            <nav>
                <button type="button">Buscar</button>
                <input type="text" name="" id="" placeholder="Buscar pelo código ou nome...">
            </nav>
        </div>
    </header>
    <section>
    <div class="container">
            <main>
              <?php
                $host = 'localhost'; 
                $login = 'root';
                $password = '';
                $dbname = 'dbcadastro'; 

                $conn = new mysqli($host, $login, $password, $dbname, 3306);

                if ($conn->connect_error) {
                    die("Conexão falhou: " . $conn->connect_error);
                }

                $sql = "SELECT codigo, nome, email, phone, dob, pass FROM usuarios";
                $result = $conn->query($sql);

                // Verifica se há resultados
                if ($result->num_rows > 0) {
                    // Início da tabela HTML
                    echo "<table>";
                    echo "<caption>Tabela dos usuários cadastrados</caption>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>Código</th>";
                    echo "<th>Nome</th>";
                    echo "<th>E-mail</th>";
                    echo "<th>Telefone</th>";
                    echo "<th>Data de Nascimento</th>";
                    echo "<th>Senha</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['codigo'] . "</td>";
                        echo "<td>" . $row['nome'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td>" . $row['dob'] . "</td>";
                        echo "<td>" . $row['pass'] . "</td>";
                        echo "</tr>";
                    }

                    echo "</tbody>";
                    echo "</table>";
                } else {
                    echo "Nenhum registro encontrado.";
                }
                $conn->close();
                ?>
            </main>
          </div>
    </section>
    <footer class="footer">
        <h2>G.G.M 🦖</h2>
    </footer>
</body>
</html>
<!--
    CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    data_nascimento DATE NOT NULL,
    senha VARCHAR(255) NOT NULL
);
-->