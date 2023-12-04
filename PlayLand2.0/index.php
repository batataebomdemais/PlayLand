<?php

    $pdo = new PDO('mysql:host=localhost;dbname=loja','root','');
    $sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE email=? AND senha=?");
    $sql->execute(array($_POST['email'], sha1($_POST['senha'])));
    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    session_start()

     if (!empty($resultado)) {
        $_SESSION['usuario'] = $_POST['email'];
        echo "<meta http-equiv='refresh' content='0; URL=home.php'/>"; 

    } else {
        echo "<meta http-equiv='refresh' content='0; URL=home.php'/>";
    }



?>