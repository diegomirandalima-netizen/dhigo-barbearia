<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhigo Barbearia</title>
    <link rel="stylesheet" href="./pages/style.css">
</head>
<body style="background-color: black;">

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
            <ul>
                <li><a href="./pages/cad_cliente.php">Cadastrar</a></li>
                <li><a href="#">Agendar</a></li>
                <li><a href="#">Preços</a></li>
            </ul>
        </nav>
    </header>

    <!-- Seção de Destaque / Imagem Principal - a ser corrigido, esta em cima de todos os outros elemnentos
    <section class="hero">
        <div class="hero-overlay">
            <div class="badge-horario">
                Horario de <br>funcionamento
            </div>
        </div>
    </section>-->

    <!-- Seção Sobre a Barbearia -->
    <section class="about">
        <h2><span class="barber-pole">💈</span> SOBRE A DHIGO BARBEARIA <span class="barber-pole">💈</span></h2>
        <div class="about-card">
            <p>
                Localizada no coração da cidade, a Dhigo Barbearia traz para o mercado o que há de melhor para o seu cabelo e barba.<br>
                Fundada em 2020, a Dhigo Barbearia já é destaque na cidade e conquista novos clientes a cada dia.
            </p>
            <p>
                Oferecemos profissionais experientes e antenados às mudanças no mundo da moda. O atendimento possui padrão de excelência e agilidade, garantindo qualidade e satisfação dos nossos clientes.
            </p>
        </div>
    </section>

    <!-- Rodapé -->
    <footer class="footer">
        <img src="logo.png" alt="Logo Rodapé" class="footer-logo">
        <p>&copy; Copyright Dhigo Barbearia - <?php echo date('Y'); ?></p>
    </footer>

</body>
</html>
