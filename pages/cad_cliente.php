<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

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
    <?php include 'includes/footer.php'; ?>

</body>
</html>
