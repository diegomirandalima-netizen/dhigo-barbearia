<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>                                                        <!-- Fechamento do bloco de metadados da página -->
<body>                                                          <!-- Abertura do corpo do documento onde fica o conteúdo visível -->

<div class="container">                                         <!-- Caixa principal que centraliza e limita a largura do conteúdo na tela -->
    <h2>DHIGO - AGENDAMENTO</h2>                                <!-- Título principal exibido no topo da página de cadastro -->
    
    <form action="" method="POST">                              <!-- Abertura do formulário que envia os dados via método POST para a própria página -->
        <div class="espaçamento-campo-data ">                                <!-- Container para agrupar e dar espaçamento ao campo de data -->
            <label for="data">Data:</label>                      <!-- Rótulo de texto indicativo para o campo de data -->
            <input type="date" id="data" name="data" required>  <!-- Campo de calendário para escolha do dia, com preenchimento obrigatório -->
        </div>                                                  <!-- Fechamento do container do campo de data -->

        <div class="escolher-horarios">                                <!-- Container para agrupar a seção de escolha de horários -->
            <label>Selecione o Horário:</label>                 <!-- Rótulo de texto informando para selecionar um horário -->
            <div class="radio-grid">                            <!-- Grade estrutural para organizar os botões de horário lado a lado -->
                <?php                                           // Abertura da tag para execução de lógica dinâmica em PHP
                $horarios = ['08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00']; // Array contendo a grade de horários disponíveis na barbearia
                foreach ($horarios as $hora) {                  // Laço de repetição que percorre cada um dos horários da lista
                    echo "<label class='radio-item'><input type='radio' name='hora' value='$hora' required> $hora</label>"; // Imprime na tela um botão de seleção redondo (radio) para cada hora da lista
                }                                               // Encerramento do laço de repetição foreach
                ?>                                              <!-- Fechamento da tag de script PHP -->
            </div>                                              <!-- Fechamento da grade de opções de horários -->
        </div>                                                  <!-- Fechamento do container da seção de horários -->

        <div class="identificacao-do-cliente">                                <!-- Container para agrupar o campo de identificação do cliente -->
            <label for="cliente">Cliente:</label>               <!-- Rótulo de texto indicativo para o campo do cliente -->
            <input type="text" id="cliente" name="cliente" placeholder="Nome do cliente" required> <!-- Campo para digitar o nome do cliente, com preenchimento obrigatório -->
        </div>                                                  <!-- Fechamento do container do campo do cliente -->

        <div class="tipo-de-servico">                                <!-- Container para agrupar o campo do tipo de serviço -->
            <label for="procedimento">Procedimento / Serviço:</label> <!-- Rótulo de texto indicativo para o campo de procedimento -->
            <input type="text" id="procedimento" name="procedimento" placeholder="Ex: Corte, Barba, Instalação..." required> <!-- Campo para digitar o serviço realizado, com preenchimento obrigatório -->
        </div>                                                  <!-- Fechamento do container do campo de procedimento -->

        <div class="campo-de-valores">                                <!-- Container para agrupar o campo de valores monetários -->
            <label for="valor">Valor (R$):</label>              <!-- Rótulo de texto indicativo para o campo de valor -->
            <input type="number" step="0.01" id="valor" name="valor" placeholder="0.00" required> <!-- Campo numérico que aceita decimais (centavos) para digitar o preço cobrado -->
        </div>                                                  <!-- Fechamento do container do campo de valor -->

        <div class="secao-de-pagamento">                                <!-- Container para agrupar a seção de pagamento -->
            <label>Forma de Pagamento:</label>                  <!-- Rótulo de texto indicativo para a escolha do pagamento -->
            <div class="radio-pagar">                            <!-- Grade estrutural para posicionar as opções de pagamento em linha -->
                <label class="radio-item"><input type="radio" name="pagamento" value="Dinheiro" required> Dinheiro</label> <!-- Opção de seleção para pagamentos feitos em dinheiro físico -->
                <label class="radio-item"><input type="radio" name="pagamento" value="Cartão"> Cartão</label> <!-- Opção de seleção para pagamentos em cartão ou transação eletrônica -->
            </div>                                              <!-- Fechamento da grade de opções de pagamento -->
        </div>                                                  <!-- Fechamento do container da seção de pagamento -->

        <button type="submit" name="salvar">AGENDAR</button> <!-- Botão de envio que dispara as informações preenchidas no formulário -->
    </form>                                                     <!-- Fechamento do formulário de cadastro -->

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
<?php include 'includes/footer.php'; ?>                                                     
</body>                                                      
</html>                                                         
