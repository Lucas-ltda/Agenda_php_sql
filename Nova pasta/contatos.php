<!-- primeiro verificar se o arquivo conexão está sendo executado, já que é a conexão com o bancdo de dados -->
<style>
    
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<header>
    <h2>Contatos</h2>
</header>
<div>
    <a href="index.php?menuOp=novoContato">Novo Contato</a>
</div>
<!-- Criar tabela de exibição dos contatos -->
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Data Nasc.</th>
            <th>Excluir</th>
            <th>Editar</th>
        </tr>
    </thead>            
    <?php
        $SQL = "SELECT *,
        DATE_FORMAT(Contato_dt_nascimento,'%d/%m/%y') AS Contato_dt_nascimento 
        FROM bd_contatos;";// faz uma consulta completa na tabela; Detalhe: a data de nascimento é formatada para o padrão brasileiro
        $resultado = mysqli_query($conexao,$SQL) or die("FALHA NA CONSULTA");// executa a consulta
    ?>
    <tbody>
        <?php
        //LOOP PARA GERAR AS LINHAS DA TABELA
        foreach($resultado as $contato_dado){
            echo"<tr>";
            echo"<td>".$contato_dado['Contato_nome']."</td>";
            echo"<td>".$contato_dado['Contato_telefone']."</td>";
            echo"<td>".$contato_dado['Contato_email']."</td>";
            echo"<td>".$contato_dado['Contato_dt_nascimento']."</td>";
            echo"<td><a href='index.php?menuOp=excluirContato&id=".$contato_dado['Contato_id']."'>Excluir</a></td>";
            echo"<td><a href = 'index.php?menuOp=editarContato&id=".$contato_dado['Contato_id']."'>Editar</a></td>";
            echo"</tr>";}
        ?>
    </tbody> 
</table>
