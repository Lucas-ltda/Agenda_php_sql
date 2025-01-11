<header>
    <h3>Cadastrando novo contanto</h3>
</header>

<div>
    <form action="index.php?menuOp=inserir-contato" method="POST">
        <!-- detalhe o nome da URL é diferente do nome desse arqivo local que tem somente o formulario -->
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nomeContato" id="nome" required>
        </div>
        <div>
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefoneContato" id="telefone" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="emailContato" id="email" required>
        </div>
        <div>
            <label for="dataNasc">Data de Nascimento:</label>
            <input type="date" name="dataNascContato" id="dataNasc" required>
        </div>
        <div>
            <label for="dataNasc">Sexo:</label>
            <input type="text" name="sexoContato" id="Sexo" required>
        </div>
        <button type="submit">Cadastrar</button>
    </form>
</div>