<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preços - Dhigo Barbearia</title>
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome para os ícones de tesoura -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

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
            <ul>
                <li><a href="./pages/home.php">home</a></li>
                <li><a href="./pages/cad_cliente.php">Cadastrar</a></li>
                <li><a href="./pages/agendamento_novo.php">Agendar</a></li>
                <li><a href="./pages/preco.php">Preços</a></li>
            </ul>
        </nav>
    </header>

    <!-- Conteúdo Principal -->
    <main class="main-content">
        <!-- Título e Imagem Principal -->
        <section class="barber-feature">
            <h2>DHIGO</h2>
            <div class="feature-img-container">
                <img src="corte.jpg" alt="Barbeiro Dhigo a cortar cabelo" class="feature-img">
            </div>
        </section>

        <!-- Cartões de Preços -->
        <section class="pricing-section">
            <div class="price-card-wrapper">
                <span class="price-label">Preços</span>
                <div class="price-card">
                    <i class="fa-solid fa-scissors card-icon"></i>
                    <p><strong>Cabelo: R$ 40,00</strong></p>
                </div>
            </div>

            <div class="price-card-wrapper">
                <span class="price-label">Preços</span>
                <div class="price-card">
                    <i class="fa-solid fa-scissors card-icon"></i>
                    <p><strong>Cabelo +barba:</strong><br><strong>R$ 60,00</strong></p>
                </div>
            </div>

            <div class="price-card-wrapper">
                <span class="price-label">Preços</span>
                <div class="price-card">
                    <i class="fa-solid fa-scissors card-icon"></i>
                    <p><strong>Cabelo + barba</strong><br><strong>+ Sobrancelha:</strong><br><strong>R$ 75,00</strong></p>
                </div>
            </div>
        </section>


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

