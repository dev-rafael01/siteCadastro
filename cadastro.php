<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="cadastro-container">
        <h2>Cadastro de Novo Usuário</h2>

        <form action="salvar_cadastro.php" method="POST">

            <!-- EMAIL -->
            <input type="text" 
                   name="email" 
                   placeholder="Email (ex: usuario@)" 
                   pattern="[A-Za-z0-9._%+-]+@" 
                   title="Digite apenas letras, números e um @" 
                   required><br>

            <!-- USUÁRIO -->
            <input type="text" 
                   name="usuario" 
                   placeholder="Usuário" 
                   required><br>

            <!-- SENHA -->
            <input type="password" 
                   name="senha" 
                   placeholder="Senha (6 dígitos)" 
                   pattern=".{6}" 
                   title="A senha deve ter exatamente 6 caracteres" 
                   required><br>

            <!-- TELEFONE -->
            <input type="text" 
                   name="telefone" 
                   placeholder="Telefone (11-9999-9999)" 
                   maxlength="15" 
                   required 
                   oninput="this.value = this.value.replace(/[^0-9]/g, '')"><br>

            <button type="submit">Cadastrar</button>
        </form>

        <div class="links">
            <p><a href="login.php">Voltar ao login</a></p>
        </div>
    </div>

    <script>
        // Bloqueia caracteres inválidos no campo telefone
        const telefone = document.querySelector('input[name="telefone"]');
        telefone.addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    </script>
</body>
</html>
