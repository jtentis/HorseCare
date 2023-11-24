<?php
    
    if(isset($_POST['submit'])){

        include_once('C:\xampp\htdocs\HorseCare\conexao.php');
    
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = (base64_encode($_POST['senha']));
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];

        $inserir = mysqli_query($conexao, "INSERT INTO `registro` (`nome`, `email`, `senha`, `cpf`, `endereco`, `telefone`) VALUES ('$nome', '$email', '$senha', '$cpf', '$endereco', '$telefone')");
    }


?>


<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbName = 'horsecare';
$conexao = new mysqli($host, $username, $password, $dbName);

if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $senha = base64_encode($_POST['senha']);

    // Utilizando prepared statements para evitar SQL Injection
    $query = $conexao->prepare("SELECT email, senha FROM `registro` WHERE email = ? AND senha = ?");
    $query->bind_param("ss", $email, $senha);
    $query->execute();
    $query->store_result();
    
    if ($query->num_rows > 0) {
        // Login bem-sucedido
        header('Location: http://localhost/HorseCare/logout.php');
    } else {
        echo '
        <div class="modal-error">
            <p>Seu email ou senha estão incorretos. Por favor, tente novamente.</p>
        </div>
        ';
    }

    $query->close();
}

$conexao->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="LOGO/LOGO-CUT-WHITE.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <script src="https://kit.fontawesome.com/5f5ea0b0a8.js" crossorigin="anonymous"></script>
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
                <input type="text" placeholder="Nome" name="nome" id="name" required>
                <input type="email" placeholder="Email" name="email" id="email" required>
                <input type="password" placeholder="Senha" name="senha" id="senha" required>
                <input type="text" placeholder="CPF" name="cpf" id="cpf" required>
                <input type="text" placeholder="Endereço" name="endereco" id="cpf" required>
                <input type="text" placeholder="Telefone" name="telefone" id="telefone" required>
                <!-- <input type="password" placeholder="Confirmação de senha"> -->
                <input type="submit" value="Registrar" id="submit" name="submit">
            </form>
        </div>
        <div class="form-container sign-in">

        <form action="index.php" method="POST">
                <h1>Fazer Login</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>ou use seu email e senha</span>
                <input type="email" placeholder="Email" name="email" id="email" required>
                <input type="password" placeholder="Senha" name="senha" id="senha" required>
                <p>Esqueceu sua senha? <a href="#">Recupere!</a></p>
                <input type="submit" value="Login" id="submit" name="login">
            </form>
            <!-- <form id="form-login" method="post">
                <h1>Fazer login</h1>

                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>ou use seu email e senha</span>

                <input 
                    type="email" 
                    placeholder="Email" 
                    name="email" 
                    id="email"
                    required
                >
                <input 
                    type="password" 
                    placeholder="Senha" 
                    name="senha"
                    id="senha"
                    required
                >
                <p>Esqueceu sua senha? <a href="#">Recupere!</a></p>
                    
            </form> -->
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
    <a href="http://localhost/HorseCare/index.php" class="para-o-topo">
		<span class="material-icons">arrow_back</span>
	</a>

    <script src="script.js"></script>
</body>

</html>