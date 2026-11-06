<?php include 'includes/head.php'; ?>                           <!-- Inclui a estrutura do cabeçalho da página (metatags, arquivos CSS, etc.) -->
<body>                                                         
        <nav class="menu">                                      <!-- Bloco de navegação principal do menu do site -->
            <ul>                                                <!-- Abertura da lista de links do menu -->
            <p class="slogan-top">Corte - Estilo - Atitude !</p> <!-- Exibe a frase de efeito/slogan no topo do menu -->
                <li><a href="home.php">Home</a></li>            <!-- Link de navegação direcionando para a página inicial -->
                <li><a href="cad_cliente.php">Cadastrar</a></li> <!-- Link de navegação direcionando para a página de cadastro -->
                <li><a href="index_agendamento.php">Agendar</a></li><!-- Link de navegação direcionando para o sistema de agendamento -->
                <li><a href="index_preco.php">Preço</a></li>    <!-- Link de navegação direcionando para a tabela ou página de preços -->
            </ul>                                               <!-- Fechamento da lista de navegação -->
        </nav>                                                  <!-- Fechamento do bloco do menu -->
 


    <main class="horario">                                      <!-- Conteúdo principal focado nas informações de horários -->
        <div class="banner-titlo">                              <!-- Container para agrupar as partes do título de chamada -->
            <h2><strong>HORÁRIO DE</strong></h2>                <!-- Primeira linha do título de funcionamento principal -->
            <div class="banner-hr">                             <!-- Container de estilo para destacar a segunda palavra do título -->
                <span>funcionamento</span>                      <!-- Segunda parte do título em destaque -->
            </div>                                              <!-- Fechamento do container do destaque do título -->
        </div>                                                  <!-- Fechamento do bloco completo do título -->

        <div class="tab-dia">                                   <!-- Bloco/Tabela principal que agrupa as linhas com os dias de atendimento -->

            <div class="organizar-tab-hr">                          <!-- Primeira linha da tabela (Horário convencional de atendimento) -->
                <div class="dia">Terça a<br>Sábado</div>        <!-- Coluna com o intervalo de dias da semana (com quebra de linha) -->
                <div class="divisoria"></div>                     <!-- Divisor visual gráfico posicionado entre os dias e as horas -->
                <div class="time">09h às<br>20h</div>           <!-- Coluna com o horário de atendimento desses dias correspondentes -->
            </div>                                              <!-- Fechamento da primeira linha da tabela -->

            <div class="organizar-tab-hr">                          <!-- Segunda linha da tabela (Atendimento diferenciado no final de semana) -->
                <div class="dia">Domingo</div>                  <!-- Coluna que exibe o dia de domingo isoladamente -->
                <div class="divisoria"></div>                     <!-- Divisor visual gráfico centralizado na linha -->
                <div class="time">09h às<br>13h</div>           <!-- Coluna com o horário de atendimento reduzido de domingo -->
            </div>                                              <!-- Fechamento da segunda linha da tabela -->

            <div class="organizar-tab-hr">                          <!-- Terceira linha da tabela (Regra de atendimento para datas comemorativas) -->
                <div class="dia">Feriados</div>                 <!-- Coluna com a identificação para dias de feriado -->
                <div class="divisoria"></div>                     <!-- Divisor visual gráfico centralizado na linha -->
                <div class="time">09h às<br>14h</div>           <!-- Coluna com o horário de funcionamento específico para feriados -->
            </div>                                              <!-- Fechamento da terceira linha da tabela -->
        </div>                                                  
    </main>                                                  

    <?php include 'includes/footer.php'; ?>                     <!-- Inclui a estrutura do rodapé da página (scripts, links de rodapé, etc.) -->

</body>                                                        
</html>                                                         
