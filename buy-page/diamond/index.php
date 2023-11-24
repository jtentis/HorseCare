<?php

    if(isset($_POST['submit'])){

        include_once('C:\xampp\htdocs\HorseCare\conexao.php');
    
        $email = $_POST['email'];
        $racao = 'Capim Coast Cross';
        $baia = '16m2';
        $banho_dia = '3';
        $ferrageamento_quinzenal = '1';
        $higiene_diaria = '1';
        $veterinario_semanal = '1';
        $data_ini = $_POST['data_ini'];
        $data_fim = $_POST['data_fim'];

        $hospedar_diamond = mysqli_query($conexao, "INSERT INTO `planodiamond` (`baia`, `racao`, `banho_dia`, `ferrageamento_quinzenal`, `veterinario_semanal`, `higiene_diaria`, `email`, `data_ini`,`data_fim`) VALUES ('$baia', '$racao', '$banho_dia', '$ferrageamento_quinzenal', '$higiene_diaria', '$veterinario_semanal','$email', '$data_ini', '$data_fim')");
    }

    if (isset($_POST['email'])) {
      $email = $_POST['email'];
  
      // Utilizando prepared statements para evitar SQL Injection
      $query = $conexao->prepare("SELECT email FROM `registro` WHERE email = ?");
      $query->bind_param("s", $email);
      $query->execute();
      $query->store_result();
      
      if ($query->num_rows > 0) {
          // Login bem-sucedido
          header('Location: http://localhost/HorseCare/logout.php');
      } else {
          echo '
          <div class="modal-error">
              <p>Seu email esta incorreto, por favor, digite novamente!</p>
          </div>
          ';
      }
  
      $query->close();
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="Imagens/LOGO-CUT-WHITE.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <title>HorseCare / Planos / Diamond</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
      <div class="container flex">
        <div class="left">
          <div class="main_image">
            <img src="Imagens/cavalo-card-diamond.jpg" class="slide">
          </div>
          <div class="option flex">
            <img src="Imagens/piquete2.jpeg" onclick="img('Imagens/piquete2.jpeg')">
            <img src="Imagens/piquete1.jpeg" onclick="img('Imagens/piquete1.jpeg')">
            <img src="Imagens/baia-diamond.jpeg" onclick="img('Imagens/baia-diamond.jpeg')">
            <img src="Imagens/banho.jpeg" onclick="img('Imagens/banho.jpeg')">
            <img src="Imagens/local.jpeg" onclick="img('Imagens/local.jpeg')">
            <img src="Imagens/local2.jpeg" onclick="img('Imagens/local2.jpeg')">
          </div>
        </div>
        <div class="right">
          <h3>Planos / Plano Diamond</h3>
          <h4>R$2.000,00 / Dia </h4>
          <p>
            <li>Baias de 16m<sup>2</sup></li>
            <li>Capim Coast Cross</li>
            <li>Banho 3 vezes ao dia</li>
            <li>Ferrageamento quinzenal</li>
            <li>Antedimento veterinário semanal</li>
            <li>Escovação e higiene diária</li>
            <li>Desconto em cursos equestres</li>
          </p>
          <p>Ao lado, as imagens correspontes ao Plano Diamond!</p>
          <form action="index.php" method="POST">
            <div class="datas">
              <input type="date" name="data_ini" id="data_ini" required>
              <input type="date" name="data_fim" id="data_fim" required>
              <input type="email" placeholder="Email" name="email" id="email" required>
            </div>
            <input type="submit" value="Hospedar" name="submit" id="submit" onclick=changeStyle()>
          </form>
        </div>
      </div>
      <a href="http://localhost/HorseCare/logout.php" class="para-o-topo">
		    <span class="material-icons">arrow_back</span>
	    </a>
    </section>
    <script>
      function img(anything) {
        document.querySelector('.slide').src = anything;
          }

      function change(change) {
        const line = document.querySelector('.home');
        line.style.background = change;
      }

      function changeStyle(){
        var element = document.getElementById("dialog");
        element.style.opacity = "0.5";
      } 
    </script>
  </body>
  
  </html>