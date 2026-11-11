<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento - Dhigo Barbearia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="agendamento-novo-page">

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

    <!-- Conteúdo Principal / Agendamento -->
    <main class="agendamento-novo-main">
        <div class="agendamento-novo-container">
            
            <h2 class="dhigo-title-agendamento">
                <span class="barber-pole">💈</span> AGENDAMENTO <span class="barber-pole">💈</span>
            </h2>

            <form action="processar_agendamento.php" method="POST">
                <div class="agendamento-topo">
                    <div class="data-input-group">
                        <label for="data-agenda-novo">DATA:</label>
                        <input type="date" id="data-agenda-novo" name="data_agenda" required>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="agendamento-novo-table">
                        <thead>
                            <tr>
                                <th>HORA</th>
                                <th>CLIENTE</th>
                                <th>PROCEDIMENTO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $horarios = ["8:00", "9:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00"];
                            
                            foreach ($horarios as $index => $hora) {
                                echo "<tr>";
                                echo "<td><strong>{$hora}</strong></td>";
                                echo "<td><input type='text' name='cliente_{$index}' placeholder='Nome do cliente'></td>";
                                echo "<td>
                                        <select name='procedimento_{$index}'>
                                            <option value=''>Selecione o procedimento</option>
                                            <option value='Cabelo'>Cabelo (R$ 40,00)</option>
                                            <option value='Cabelo + Barba'>Cabelo + Barba (R$ 60,00)</option>
                                            <option value='Cabelo + Barba + Sobrancelha'>Cabelo + Barba + Sobrancelha (R$ 75,00)</option>
                                        </select>
                                      </td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <!-- Rodapé da Tabela (Entrada, Saída, Total Dia) -->
                <div class="agendamento-novo-resumo">
                    <div class="resumo-bloco">
                        <h4>Forma de pagamento</h4>
                        <div class="resumo-linha">
                            <span>Dinheiro R$</span>
                            <input type="text" name="entrada_dinheiro" placeholder="0,00">
                        </div>
                        <div class="resumo-linha">
                            <span>Cartão R$</span>
                            <input type="text" name="entrada_cartao" placeholder="0,00">
                        </div>
                        <div class="resumo-linha">
                            <span>PIX R$</span>
                            <input type="text" name="entrada_pix" placeholder="0,00">
                        </div>
                <div class="form-submit-container">
                    <button type="submit" class="submit-btn">Salvar Agendamento</button>
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


    <?php                                                       // Abertura da tag PHP para processamento dos dados enviados
    if (isset($_POST['salvar'])) {                              // Verifica se o formulário foi enviado clicando no botão "salvar"
        $data = htmlspecialchars($_POST['data']);               // Captura a data enviada limpando caracteres especiais por segurança
        $hora = htmlspecialchars($_POST['hora']);               // Captura o horário selecionado limpando caracteres especiais por segurança
        $cliente = htmlspecialchars($_POST['cliente']);         // Captura o nome digitado limpando caracteres especiais por segurança
        $procedimento = htmlspecialchars($_POST['procedimento']); // Captura o procedimento limpando caracteres especiais por segurança
        $valor = number_format((float)$_POST['valor'], 2, ',', '.'); // Converte o valor enviado para float e formata no padrão brasileiro (10,00)
        $pagamento = htmlspecialchars($_POST['pagamento']);     // Captura a forma de pagamento selecionada protegendo contra códigos maliciosos

        echo "<div class='resultado'>";                         // Imprime a tag de abertura da caixa de resposta de sucesso
        echo "<h3>Agendamento Registrado com Sucesso!</h3>";    // Imprime um cabeçalho confirmando que a operação deu certo
        echo "<p><strong>Data:</strong> " . date('d/m/Y', strtotime($data)) . "</p>"; // Converte o formato da data de Y-m-d para d/m/Y (padrão BR) e exibe na tela
        echo "<p><strong>Hora:</strong> $hora</p>";            // Exibe na tela o horário que foi cadastrado
        echo "<p><strong>Cliente:</strong> $cliente</p>";      // Exibe na tela o nome do cliente que foi cadastrado
        echo "<p><strong>Procedimento:</strong> $procedimento</p>"; // Exibe na tela o serviço associado a este horário
        echo "<p><strong>Valor:</strong> R$ $valor</p>";        // Exibe o valor já formatado com o símbolo do Real na tela
        echo "<p><strong>Pagamento:</strong> $pagamento</p>";  // Exibe a forma de pagamento que foi registrada para o atendimento
        echo "</div>";                                          // Imprime o fechamento da caixa de resposta de sucesso
    }                                                           // Encerramento da verificação condicional do isset
    ?>                                                          <!-- Fechamento da tag de script PHP -->
</div>                                                     
</body>                                                      
</html>                                                         
