<?php

    if(isset($_POST['submit'])){

        include_once('C:\xampp\htdocs\HorseCare\conexao.php');
    
        $email = $_POST['email'];
        $racao = 'Capim Cidreira';
        $baia = '14m2';
        $banho_dia = '2';
        $ferrageamento_20 = '1';
        $higiene_diaria = '1';
        $veterinario_quinzenal = '1';
        $data_ini = $_POST['data_ini'];
        $data_fim = $_POST['data_fim'];

        $hospedar_diamond = mysqli_query($conexao, "INSERT INTO `planoplatinum` (`baia`, `racao`, `banho_dia`, `ferrageamento_20`, `veterinario_quinzenal`, `higiene_diaria`, `email`, `data_ini`,`data_fim`) VALUES ('$baia', '$racao', '$banho_dia', '$ferrageamento_20', '$higiene_diaria', '$veterinario_quizenal','$email', '$data_ini', '$data_fim')");
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
          header('Location: http://localhost/HorseCare/buy-page/compraEfetuada.html');
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
    <meta charset="UTF-8">
    <link rel="icon" href="Imagens/LOGO-CUT-WHITE.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <title>HorseCare / Planos / Platinum</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
      <div class="container flex">
        <div class="left">
          <div class="main_image">
            <img src="Imagens/cavalo-card-platinum.jpg" class="slide">
          </div>
          <div class="option flex">
            <img src="Imagens/baia-platinum.jpeg" onclick="img('Imagens/baia-platinum.jpeg')">
            <img src="Imagens/banho.jpeg" onclick="img('Imagens/banho.jpeg')">
            <img src="Imagens/piquete2.jpeg" onclick="img('Imagens/piquete2.jpeg')">
            <img src="Imagens/piquete1.jpeg" onclick="img('Imagens/piquete1.jpeg')">
            <img src="Imagens/local2.jpeg" onclick="img('Imagens/local2.jpeg')">
            <img src="Imagens/local.jpeg" onclick="img('Imagens/local.jpeg')">
          </div>
        </div>
        <div class="right">
          <h3>Planos / Plano Platinum</h3>
          <h4>R$1.750,00 / Dia </h4>
          <p>
            <li>Baias de 14m<sup>2</sup></li>
            <li>Capim Cidreira</li>
            <li>Banho 2 vezes ao dia</li>
            <li>Ferrageamento a cada 20 dias</li>
            <li>Antedimento veterinário quinzenal</li>
            <li>Escovação e higiene diária</li>
          </p>
          <p>Ao lado, as imagens correspontes ao Plano Platinum!</p>
          <form action="index.php" method="POST">
            <div class="datas">
              <input type="date" name="data_ini" id="data_ini" required>
              <input type="date" name="data_fim" id="data_fim" required>
              <input type="email" placeholder="Email" name="email" id="email" required>
            </div>
            <input type="submit" value="Hospedar" name="submit" id="submit">
          </form>
        </div>
      </div>
    </section>
      <a href="http://localhost/HorseCare/logout.php" class="para-o-topo">
		    <span class="material-icons">arrow_back</span>
	    </a>
    <script>
      function img(anything) {
        document.querySelector('.slide').src = anything;
          }

      function change(change) {
        const line = document.querySelector('.home');
        line.style.background = change;
      }
    </script>
  </body>
  
  </html>