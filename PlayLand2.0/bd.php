<?php

    $pdo = new PDO('mysql:host=localhost;dbname=loja','root','');
    $sql = $pdo->prepare("INSERT INTO `usuarios` VALUES (null,?,?,?,?,?,?,?)");
    $sql->execute(array($_POST['nome'],
                        $_POST['email'],
                        $_POST['genero'],
                        $_POST['data_nascimento'],
                        $_POST['cidade'],
                        $_POST['estado'],
                        $_POST['senha']));

    session_start();
    $_SESSION['erro'] = "<div class= 'alert alert-success' role='alert'>Cadastro realizado com sucesso!</div>";
    echo "<meta http-equiv='refresh' content='0; URL=login.php'/>";


    ?>

