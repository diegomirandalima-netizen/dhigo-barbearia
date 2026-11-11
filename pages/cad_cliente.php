<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Dhigo Barbearia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="cadastro-page">

    <!-- Cabeçalho -->
    <header class="header">
        <div class="logo-container">
        <img src="logo.png" alt="Logo Dhigo Barbearia" class="logo-img">
        </div>
        <div class="title-container">
            <h1><span class="barber-pole">💈</span> DHIGO BARBEARIA <span class="barber-pole">💈</span></h1>
            <p>Estilos é tudo!</p>
        </div>
        <nav class="nav-menu">
            <p class="slogan-top">Corte - Estilo - Atitude !</p>
           
        <nav class="menu">
            <ul>
                <li><a href="./pages/home.php">home</a></li>
                <li><a href="./pages/cad_cliente.php">Cadastrar</a></li>
                <li><a href="./pages/agendamento_novo.php">Agendar</a></li>
                <li><a href="./pages/preco.php">Preços</a></li>
            </ul>
        </nav>

        </nav>
    </header>

    <!-- Conteúdo Principal / Formulário -->
    <main class="form-main-content">
        <div class="form-card-container">
            <h2>Formulário de Cadastro de Clientes</h2>
            <hr class="form-divider">
            
            <form action="processar_cadastro.php" method="POST">
                
                <!-- Nome Completo -->
                <div class="form-group">
                    <div class="input-row">
                        <div class="input-wrapper">
                            <input type="text" name="Primeiro_nome" required>
                            <span class="input-subtext">Primeiro nome</span>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="sobrenome" required>
                            <span class="input-subtext">sobrenome</span>
                        </div>
                    </div>
                </div>

                <!-- E-mail -->
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="email" required>
                    <span class="input-subtext">exemplo@exemplo.com</span>
                </div>

                <!-- Número de Telefone -->
                <div class="form-group">
                    <label>Número de Telefone</label>
                    <input type="tel" name="telefone" placeholder="(000) 000-0000" required>
                    <span class="input-subtext">Favor Inserir um número de telefone válido.</span>
                </div>

                <!-- Endereço -->
                <div class="form-group">
                    <label>Endereço</label>
                    <input type="text" name="endereco" required>
                    <span class="input-subtext">Rua, número e birro</span>
                </div>
                <div class="form-group">
                    <label>Complemento</label>
                    <input type="text" name="complemento" required>
                    <span class="input-subtext">complemento</span>
                </div>

                <!-- CPF -->
                <div class="form-group">
                    <label>Cpf</label>
                    <input type="text" name="cpf" placeholder="xxx.xxx.xxx-xx" required>
                    <span class="input-subtext">xxx.xxx.xxx-xx</span>
                </div>

                <!-- Cidade e Estado -->
                <div class="form-group">
                    <div class="input-row">
                        <div class="input-wrapper">
                            <input type="text" name="cidade" required>
                            <span class="input-subtext">Cidade</span>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" name="estado" required>
                            <span class="input-subtext">Estado</span>
                        </div>
                    </div>
                </div>

                <!-- CEP -->
                <div class="form-group">
                    <label>CEP</label>
                    <input type="text" name="cep" required>
                    <span class="input-subtext">CEP</span>
                </div>

                <!-- Botão Submit -->

                <button type="submit" class="btn-cadastrar-pequeno">Cadastrar</button>

                </div>

            </form>
        </div>
    </main>

    <!-- Rodapé -->
<footer class="footer">
  <div class="footer-contro">
    <img src="logo.png" class = "logo-footer" alt="logo">
        <div class="footer-logo">DHIGO BARBEARIA</div>
    <p class="footer-text">&copy; Copyright Dhigo Barbearia - 2020</p>
  </div>
</footer>

</body>
</html>
