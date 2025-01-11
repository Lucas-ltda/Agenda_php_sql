<header>
    <h3>Inserir contato</h3>
</header>

<?php

    $nomeContato = mysqli_real_escape_string($conexao, $_POST['nomeContato']);
    $telefoneContato = mysqli_real_escape_string($conexao, $_POST['telefoneContato']);
    $emailContato = mysqli_real_escape_string($conexao, $_POST['emailContato']);
    $data_nascimento = mysqli_real_escape_string($conexao, $_POST['dataNascContato']);
    $sexo = mysqli_real_escape_string($conexao, $_POST['sexoContato']);
    $sql = " INSERT INTO bd_contatos ( 
        Contato_nome,
        Contato_telefone,
        Contato_email,
        Contato_sexo,
        Contato_dt_nascimento) 
        VALUES (
            '$nomeContato',
            '$telefoneContato',
            '$emailContato',
            '$sexo',
            '$data_nascimento'
        )";

       if (mysqli_query($conexao,$sql)) {
              echo "Contato inserido com sucesso!";
         } else {
              echo "Erro ao cadastrar contato";}
        mysqli_close($conexao);
?>

