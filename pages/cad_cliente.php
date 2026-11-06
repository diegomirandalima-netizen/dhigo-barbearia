<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/style.css">

    <title>Dhigo Barbearia - Cadastro de Clientes</title>
</head>
<body>

    <header>
        <h1>DHIGO BARBEARIA</h1>
        <nav class="menu">
            <ul>
                <p class="slogan-top">Corte - Estilo - Atitude !</p>
                <li><a href="home.php">Home</a></li>
                <li><a href="index_agendamento.php">Agendar</a></li>
                <li><a href="index_preco.php">Preço</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Formulário de Cadastro de Clientes</h2>

        <form method="POST" action="cad_envio.php">
            <div>
                <label>Nome Completo:</label>
                <input type="text" name="nome" required>
            </div>

            <div>
                <label>E-mail:</label>
                <input type="email" name="email" required placeholder="exemplo@exemplo.com">
            </div>

            <div>
                <label>Número de Telefone:</label>
                <input type="text" name="telefone" required placeholder="(00) 00000-0000">
            </div>

            <div>
                <label>Endereço (Rua):</label>
                <input type="text" name="endereco" required>
            </div>

            <div>
                <label>CPF:</label>
                <input type="text" name="cpf" required placeholder="xxx.xxx.xxx-xx">
            </div>

            <div>
                <div>
                    <label>Cidade:</label>
                    <input type="text" name="cidade" required>
                </div>
                <div>
                    <label>Estado:</label>
                    <input type="text" name="estado" required>
                </div>
            </div>

            <div>
                <label>CEP:</label>
                <input type="text" name="cep" required>
            </div>

            <button type="submit">Submit</button>
        </form>
    </main>


    <footer>
        <p>&copy; Copyright Dhigo Barbearia - 2020</p>
    </footer>

</body>
</html>
