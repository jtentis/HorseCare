<?php

    if(isset($_POST['submit'])){

        include_once('C:\xampp\htdocs\HorseCare\conexao.php');
    
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $inserir = mysqli_query($conexao, "INSERT INTO `registro` (`nome`, `email`, `senha`) VALUES ('$nome', '$email', '$senha')");
    }

    // if(isset($_GET['login'])){

    //     $login = mysqli_query($conexao, "SELECT nome, senha FROM `registro` WHERE nome ='$nome' AND senha = '$senha'");
    //     $res = mysqli_fetch_row($login);

    //     include_once('C:\xampp\htdocs\HorseCare\conexao.php');

    //     $nome = $_GET['nome'];
    //     $email = $_GET['email'];

    //     if($res){
    //         header('location:/index.html');
    //     }

    //     else{
    //         header('location:error.php');
    //     }
    // }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="/Imagens/Logos/LOGO-CUT-WHITE.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>HorseCare / Login</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="index.php" method="POST">
                <h1>Registrar</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>ou preencha seus dados</span>
                <input type="text" placeholder="Nome" name="nome" id="name">
                <input type="email" placeholder="Email" name="email" id="email">
                <input type="password" placeholder="Senha" name="senha" id="senha">
                <!-- <input type="password" placeholder="Confirmação de senha"> -->
                <input type="submit" value="Registrar" id="submit" name="submit">
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="index.php" method="GET">
                <h1>Fazer login</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>ou use seu email e senha</span>
                <input type="email" placeholder="Email" name="nome">
                <input type="password" placeholder="Senha" name="senha">
                <p>Esqueceu sua senha? <a href="#">Recupere!</a></p>
                <input type="submit" value="Login" id="submit" name="login">
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Já possui login?</h1>
                    <p>Faça login para ter acesso à todas as funcinalidades do site!</p>
                    <button class="hidden" id="login">Fazer login</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Ainda não tem login?</h1>
                    <p>Se registre para ter acesso à todas as funcionalidades do site!</p>
                    <button class="hidden" id="register">Registrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>