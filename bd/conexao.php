<?php

include ("config.php");

$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) or die ("Conexão com banco não está funcionando, fofo!". mysqli_connect_error()); ;
// vai dar erro dizendo que não tem banco com o nome, claro não tem banco de dados nenhum rs rs rs.
