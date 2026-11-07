<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>                                                   

    <main class="baner-home">                                   <!-- Conteúdo principal da página (foco na Home) -->
        <section class="banner-principal">                      <!-- Seção de destaque do topo da página -->
            <h3>DHIGO</h3>                                      <!-- Título principal com o nome da barbearia -->
            <div class="foto-principal">                        <!-- Container para organizar a imagem de destaque -->
                <img src="corte.jpg" alt="Barbeiro">         <!-- Imagem ilustrativa com texto alternativo para acessibilidade -->
            </div>                                              <!-- Fechamento do container da imagem -->
        </section>                                              <!-- Fechamento da seção de destaque -->

        <section class="precos">                                <!-- Seção que exibe os serviços e valores oferecidos -->
            <div class="card-preco">                            <!-- Primeiro cartão de preço (Serviço simples) -->
                <div class="card-header">                       <!-- Cabeçalho interno do primeiro cartão -->
                    <i class="fa-solid fa-scissors"></i>        <!-- Ícone de tesoura (FontAwesome) para o design -->
            </div>                                          <!-- Fechamento do cabeçalho do cartão -->
                <span>Preços</span>                         <!-- Rótulo indicando a categoria de preço -->
                <p>Cabelo: R$ 40,00</p>                         <!-- Descrição do serviço e o seu valor específico -->
            </div>                                              <!-- Fechamento do primeiro cartão -->

            <div class="card-preco">                            <!-- Segundo cartão de preço (Serviço duplo) -->
                <div class="card-header">                       <!-- Cabeçalho interno do segundo cartão -->
                    <i class="fa-solid fa-scissors"></i>        <!-- Ícone de tesoura para padronização visual -->
            </div>                                          <!-- Fechamento do cabeçalho do cartão -->

            <span>Preços</span>                         <!-- Rótulo indicando a categoria de preço -->
                <p>Cabelo + barba: R$ 60,00</p>                 <!-- Descrição do combo de serviços e seu valor -->
            </div>                                              <!-- Fechamento do segundo cartão -->

            <div class="card-preco">                            <!-- Terceiro cartão de preço (Serviço completo) -->
                <div class="card-header">                       <!-- Cabeçalho interno do terceiro cartão -->
                    <i class="fa-solid fa-scissors"></i>        <!-- Ícone de tesoura para manter a identidade -->
            </div>                                          <!-- Fechamento do cabeçalho do cartão -->

            <span>Preços</span>                         <!-- Rótulo indicando a categoria de preço -->
                <p>Cabelo + barba + Sobrancelha: R$ 75,00</p>   <!-- Descrição do combo completo e seu valor final -->
            </div>                                              <!-- Fechamento do terceiro cartão -->
        </section>                                              <!-- Fechamento da seção completa de preços -->

        <section class="videos">                                <!-- Seção destinada à exibição de vídeos explicativos ou portfólio -->
            <div class="miniatura-video">                       <!-- Container para a miniatura do primeiro vídeo -->
                <a href="#" class="video-1"></a>                <!-- Link corrigido para o arquivo ou destino do Vídeo 1 -->
                <div class="play-btn"><i class="play-video"></i></div><!-- Botão/Ícone visual para dar play no vídeo -->
            </div>                                              <!-- Fechamento da miniatura do primeiro vídeo -->
            
            <div class="miniatura-video">                       <!-- Container para a miniatura do segundo vídeo -->
                <a href="#" class="video-2"></a>                <!-- Link corrigido para o arquivo ou destino do Vídeo 2 -->
                <div class="play-btn"><i class="play-video"></i></div><!-- Botão/Ícone visual para dar play no vídeo -->
            </div>                                              <!-- Fechamento da miniatura do segundo vídeo -->
            
            <div class="miniatura-video">                       <!-- Container para a miniatura do terceiro vídeo -->
                <a href="#" class="video-3"></a>                <!-- Link corrigido para o arquivo ou destino do Vídeo 3 -->
                <div class="play-btn"><i class="play-video"></i></div><!-- Botão/Ícone visual para dar play no vídeo -->
            </div>                                              <!-- Fechamento da miniatura do terceiro vídeo -->
        </section>                                              <!-- Fechamento da seção de vídeos -->
    </main>                                                     <!-- Fechamento do conteúdo principal da página -->

    <?php include 'includes/footer.php'; ?>                     <!-- Inclui o arquivo do rodapé (créditos, scripts de JS, links finais) -->

</body>                                                         
</html>                                                         
