<?php
    session_start();
   
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        // Using prepared statements to prevent SQL injection
        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

        // Using rowCount() for PDO
        if($stmt->rowCount() < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: home.php');
        }
    }
    else
    {
        header('Location: login.php');
    }
?>
