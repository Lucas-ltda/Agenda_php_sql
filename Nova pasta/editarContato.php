<h3>Editar contato</h3>
<?php

$Contato_ID = $_GET["id"];

$sqlConsulta = "SELECT * FROM bd_contatos
                WHERE Contato_id = {$Contato_ID}";

$resultadoConsulta = mysqli_query($conexao,$sqlConsulta) or die;
$dados = mysqli_fetch_assoc($resultadoConsulta);
?>


<div>
    <form action="index.php?menuOp=editarContato" method="POST">
    
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nomeContato" id="nome" required value="<?=$resultadoConsulta["nomeContato"]?>">
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
