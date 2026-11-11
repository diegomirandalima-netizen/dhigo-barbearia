<?php
$horarios = [
    [
        'dias' => 'Terça a Sábado',
        'horas' => '09h às 20h'
    ],
    [
        'dias' => 'Domingo',
        'horas' => '09h às 13h'
    ],
    [
        'dias' => 'Feriados',
        'horas' => '09h às 14h'
    ]
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhigo Barbearia - Horário de Funcionamento</title>
 
    <link rel="preconnect" href="https://googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link href="https://googleapis.com/css2?family=Oswald:wght@700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Cabeçalho / Navbar -->
    <header class="navbar">
        <div class="brand">
            <div class="logo-placeholder">💈</div>
            <div class="brand-text">
                <h1>DHIGO BARBEARIA</h1>
                <p>Estilos é tudo!</p>
            </div>
            <div class="brand-pole">💈</div>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="./pages/home.php">home</a></li>
                <li><a href="./pages/cad_cliente.php">Cadastrar</a></li>
                <li><a href="./pages/agendamento_novo.php">Agendar</a></li>
                <li><a href="./pages/preco.php">Preços</a></li>
            </ul>
        </nav>
    </header>

    <!-- Conteúdo Principal -->
    <main class="container">
        
        <div class="titulo-wrapper">
            <h2 class="titulo-principal">HORÁRIO DE</h2>
            <div class="subtitulo-box">
                <h3>funcionamento</h3>
            </div>
        </div>

        <!-- Tabela de Horários alimentada dinamicamente via PHP -->
        <section class="quadro-horarios">
            <?php foreach ($horarios as $item): ?>
                <div class="linha-horario">
                    <div class="col-esquerda">
                        <span><?php echo htmlspecialchars($item['dias']); ?></span>
                    </div>
                    <div class="col-direita">
                        <span><?php echo htmlspecialchars($item['horas']); ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
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
