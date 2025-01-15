<?php
    include('bd/conexao.php') ;

    session_start();

    define('CONTROL', true);

    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Xampp</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h3>Teste</h3>
        <nav>
            <a href="index.php?menuOp=home">Home</a>
            <a href="index.php?menuOp=contatos">Contatos</a>
            <a href="index.php?menuOp=tarefas">Tarefas</a>
            <a href="index.php?menuOp=eventos">Eventos</a>
            <a href="index.php?menuOp=login">Login</a>
            <!-- percebe a variavel menuOp que é passada pela url para dar controle sobre o que será exibido na tela -->
        </nav>
    </header>

    <main>
    <?php
    // metodo GET para pegar a variavel de controle"menuOp" que é passada pela url e contem o valor da pagina que será exibida. Caso não tenha nenhum valor, home é adotado como padrão

    $menuOp = $_GET['menuOp'] ?? 'home';
        switch($menuOp){
        case 'contatos':
            require_once 'Nova pasta/contatos.php';
            break;
        case 'novoContato':
                require_once 'Nova pasta/novoContato.php';
                break;
        case 'inserir-contato':
                require_once 'Nova pasta/inserir-contato.php';
                break;
        case 'excluirContato':
            require_once 'Nova pasta/excluirContato.php';
            break;
        case 'editarContato':
            require_once 'Nova pasta/editarContato.php';
            break;
        case 'tarefas':
            require_once 'Nova pasta/tarefas.php';
            break;
        case 'eventos':
            require_once 'Nova pasta/eventos.php';
            break;
        case 'login':
            require_once 'acesso/login.php';
            break;
        default:
            require_once 'Nova pasta/home.php';
            break;
        }
    ?>
    </main>
</body>
</html>