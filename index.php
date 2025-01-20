<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastros</title>
</head>
<body>
    <div class="head">
        <header>
            <h1>Formulário de Cadastro</h1>
        </header>
    </div>
    <div class="container">
        <main>
            <section class="item">  
                <div class="item title">
                    <h2>Cadastre-se</h2>
                </div>
                <div class="item content">
                    <form action="loading-sign-in.php" method="post">
                        <label for="name">Nome:</label>
                        <input type="text" name="name" required>

                        <label for="email">E-mail:</label>
                        <input type="email" name="email" required>

                        <label for="phone">Telefone:</label>
                        <input type="tel" name="phone" required>

                        <label for="dob">Data de Nascimento:</label>
                        <input type="date" name="dob" value="<?php echo date('Y-m-d'); ?>;" required>

                        <div class="password">
                            <label for="password">Senha:</label>
                            <input type="password" name="password" required style="width: 80%;    padding: 10px; margin-bottom: 15px; border: 1px solid #ccc;border-radius: 5px;    margin-right: 12px; font-size: 1.0em;">
                            <input type="checkbox" id="showPassword" onclick="togglePassword()"> Mostrar Senha
                            <br>
                        </div>
                        <div class="btns">
                            <div class="btn">
                                <button type="submit">Confirmar</button>
                                <button type="reset">Apagar</button>
                            </div>
                            <a href="table-query.php"><button type="button">Tabela</button></a>
                        </div>
                    </form>
                </div>
            </section>
        </main>
    </div>
    <footer class="footer">
        <h2>G.G.M 🦖</h2>
    </footer>
<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const showPasswordCheckbox = document.getElementById('showPassword');
    
        if (showPasswordCheckbox.checked) {
        passwordInput.type = 'text'; // Show password
        } else {
        passwordInput.type = 'password'; // Hide password
        }
    }
</script>
</body>
</html>