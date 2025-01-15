<?php

include ("config.php");

$conexao = mysqli_connect(SERVIDOR, USUARIO, SENHA, BANCO) or die ("Conexão com banco não está funcionando". mysqli_connect_error()); 