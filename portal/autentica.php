<?php
        session_start();
        include('conexao.php');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['email']) || empty($_POST['senha'])) {
                header('Location: login.php');
                exit();
            }

            $email = mysqli_real_escape_string($conexao, $_POST['email']);
            $senha = mysqli_real_escape_string($conexao, md5($_POST['senha']));

            $query = "SELECT * FROM operadores
                    WHERE email = '{$email}' AND senha = '{$senha}'";

            $result = $conexao->query($query);

            while($dado = $result->fetch_array()) {
                $id_operadores        = $dado['id_operadores'];
                $nome_operadores      = $dado['nome_operadores'];
                $sobrenome_operadores = $dado['sobrenome_operadores'];
                $nivel              = $dado['nivel'];
            }


            if ($result) {
                $row = $result->num_rows;

                if ($row == 1) {
                    $dado = $result->fetch_assoc(); // Use fetch_assoc() para array associativo
                    $_SESSION['id_operadores']        = $id_operadores;
                    $_SESSION['nome_operadores']      = $nome_operadores;
                    $_SESSION['sobrenome_operadores'] = $sobrenome_operadores;
                    $_SESSION['email']              = $email;
                    $_SESSION['nivel']              = $nivel;

                    header('location: index.php');
                    exit();
                } else {
                    $_SESSION['nao_autenticado'] = true;
                    header('Location: login.php');
                    exit();
                }
            } else {
                // Adicione esta linha para verificar erros na consulta
                die("Erro na consulta: " . $conexao->error);
            }

        } else {
            header('Location: login.php');
            exit();
        }
    ?>
