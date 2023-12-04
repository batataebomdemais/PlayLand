<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(51, 181, 241), rgb(7, 234, 241));
        }
        div{
            background-color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 50px;
            border-radius: 40px;
            color: #fff;
        }
        input{
            padding: 10px;
            border: none;
            outline: none;
            font-size: 20px;
        }
        .inputSubmit{
            background-color:rgb(51, 181, 241) ;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 20px;
            
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div>
        <h1><img src="Playland+Logo.png" alt="" width="260px"><br></h1>
        <form action="testLogin.php" method="POST">

            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Login">
            <br><br>
            <a class="" href="cadastro.php">Cadastrar</a>
        </form>
    </div>
</body>
</html>