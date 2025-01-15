<h3>Olá</h3>

<?php 
$Contato_ID = $_GET["id"];// lembrando: a chave pra poder acessar o valor do ID vai ser o mesmo nome que foi colocado no URL após o "&"
$SQL = "DELETE FROM bd_contatos 
WHERE Contato_id = '$Contato_ID'";

mysqli_query($conexao,$SQL);
echo"Excluido com sucesso!"
?>