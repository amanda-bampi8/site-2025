    <?php
        include('verifica_login.php');
        include('conexao.php');

    $niveldapagina= array($mestre, $colaborador);

    $niveldapagina = array($mestre, $colaborador);

    if(!in_array ($nivel, $niveldapagina)) {
        echo "<script> 
            alert('Você não tem acesso a essa área!')
            history.go(-1);
            </script>";
    } else if (!empty($_POST['nomeplano']) OR !empty($_POST['descplano']) OR !empty($_POST['vltplano'])) {

    $nomeplano = $_POST['nomeplano'];

    } else {
    echo "<script> 
        alert('VIOLAÇÃO: Tentativa ilegal de operação!')
        history.go(-1)
        </script>";
                    
    }


    ?>