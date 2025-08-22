<!DOCTYPE html>
<html>
    <head>
        <title> CONTATO </title>
        <?php include 'include-site/head.php'; ?>
        </head>
    <body>
        <header>
        <?php include 'include-site/header.php'; ?>
        </header>
                <?php
                    if (!empty($_POST['email']) AND !empty($_POST['nome']) AND !empty($_POST['telefone']) AND !empty($_POST['idade'])AND !empty($_POST['mensagem'])){
                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $telefone = $_POST['telefone'];
                    $idade = $_POST['idade'];
                    $mensagem = $_POST['mensagem'];

                    echo "<h2> olá, ".$nome."!</h2>";
                    echo "<p> recebemos seus dados,seu email é: <strong> ".$email." </strong></p>";
                    echo "<p> recebemos seus dados,seu telefone é: <strong> ".$telefone." </strong></p>";
                    echo "<p> recebemos seus dados,sua idade é: <strong> ".$idade." </strong></p>";
                    echo "<p> recebemos seus dados,sua mensagem é: <strong> ".$mensagem." </strong></p>";
                    } else {
                    echo "<script> 
                        alert('VIOLAÇÃO: Tentativa ilegal de operação!')
                        history.go(-1)
                        </script>";
                    
                    }

                ?>

                    <a href="contato.php">
                        <button type="button" class="btn btn-secondary btn-lg">voltar</button>
                    </a>
        <footer>
            <?php include 'include-site/footer.php'; ?>
        </footer>
</body>