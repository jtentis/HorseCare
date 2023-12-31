<?php
    if(isset($_POST['cadastrar'])){

        include_once('C:\xampp\htdocs\HorseCare\conexao.php');
    
        $email = $_POST['email'];

        $newsletter = mysqli_query($conexao, "INSERT INTO `newsletter` (`email`) VALUES ('$email')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HorseCare</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Imagens/Logos/LOGO-CUT-WHITE.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <script src="https://kit.fontawesome.com/5f5ea0b0a8.js" crossorigin="anonymous"></script>
    <script defer src="script.js"></script>
<body>
    <div class="header" id="header">
        <div class="brand-logo">
            <a href="#header"><img src="Imagens/Logos/LOGO.png" class="logo" srcset=""></a>
        </div>
        <div class="navibar">
            <a href="#Sobre"><h2 class="link first">Sobre</h2></a>
            <a href="#main-2"><h2 class="link second">Hospedar</h2></a>
            <a href="#main-3"><h2 class="link fourth">Timeline</h2></a>
            <a href="#footer"><h2 class="link third">Contatos</h2></a>
        </div>
        <div class="login-button">
            <a href="login-page/index.php"><button id="logout">Sair</button></a>
        </div>
    </div>
    <div id="landing" class="landing-page">
        <div class="meio-animacao invi">
            <div class="imagem">
                <img src="Imagens/Icons/Secondary-color/bird-r.png" class="bird-r invi" srcset="">
                <img src="Imagens/Icons/Secondary-color/bird-r.png" class="bird-rr invi" srcset="">
                <div class="container"><img src="Imagens/CAVALO.png" class="cavalo" srcset=""></div>
            </div>
            <div class="texto-principal">
                <p class="">A melhor hospedagem de cavalos do Rio de Janeiro.</p>
        </div>
        </div>
    </div>
    <div class="wave-primary">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
    <div id="main-1" class="main-1">
        <div class="titulo-centro"><h1 id="Sobre">Sobre</h1></div>
        <div class="textos">
            <div class="texto-esquerda">
                <img src="Imagens/location.png" class="location" srcset="">
                <p class="adress" >R. Miguel Ângelo, 96 - Maria da Graça, Rio de Janeiro - RJ, 20785-220</p>
            </div>
            <div class="texto-direita"></div>
        </div>    
        <div class="conteudo">
            <div class="esquerda">
                <a href="https://www.google.com/maps/place/CEFET%2FRJ+-+Campus+Maria+da+Gra%C3%A7a/@-22.8822602,-43.2588946,15z/data=!4m2!3m1!1s0x0:0x5ef9188757a56706?sa=X&ved=2ahUKEwjQ2tv58p6BAxW9O7kGHWaGBJkQ_BJ6BAhdEAA&ved=2ahUKEwjQ2tv58p6BAxW9O7kGHWaGBJkQ_BJ6BAhmEAg" target="_blank">
                    <img src="Imagens/Maps.png" class="maps" srcset="">
                </a>
            </div>
            <div class="direita">
                <img src="Imagens/Icons/Secondary-color/bird-l.png" class="bird-l-1 invi" srcset="">
                <img src="Imagens/Icons/Secondary-color/bird-l.png" class="bird-l-2 invi" srcset="">
                <h1>Quem Somos  </h1>
                <p class="topico invi">Somos uma empresa de hospedagem de cavalos que surgiu da paixão por esses animais. Iniciamos em uma pequena fazenda e, ao percebermos a necessidade de um local seguro e aconchegante para cavalos, decidimos criar um espaço dedicado a eles. Com o tempo, expandimos nossas instalações e serviços, tornando-nos uma referência para proprietários de cavalos. Nossa equipe altamente qualificada trabalha incansavelmente para garantir o bem-estar de cada cavalo, priorizando o conforto e a felicidade dos animais. Nosso compromisso é proporcionar uma experiência única de hospedagem, onde cada cavalo é tratado com carinho e faz parte da nossa família.</p>
                
            </div>
        </div>
    </div>
    <div class="main-baias">
        <div class="titulo-baias"><h1>Baias</h1></div>
        <div class="imagens-baias invi">
            <img src="Imagens/Baias_Piquetes/IMAGEM BAIA 1.png" class="photo" srcset="">
            <img src="Imagens/Baias_Piquetes/IMAGEM BAIA 2.png" class="photo" srcset="">
            <img src="Imagens/Baias_Piquetes/IMAGEM BAIA 3.png" class="photo" srcset="">
        </div>
        <div class="texto-baias">
            <p>Nossa estrutura segue os critérios estabelecidos pela FEI (Federação Equestre Internacional), tamanho de 12m2, paredes com acabamento liso que permite a higienização, os coxos de água tem reabastecimento automático, coxos de ração tem suporte acoplado para sal mineral e camas de serragem de pinos. Sistema logístico inteligente, onde o complexo de baias se une com as pistas cobertas e descobertas, suprida de box lavatório dos cavalos e farmácia veterinária, favorecendo o fluxo das atividades. As baias estão dispostas de forma circular para que todos os cavalos se vejam, além de uma divisória interna de grade permitindo que eles se cheirem. Favorecendo o seu instinto social.</p>
        </div>
    </div>
    <div class="main-piquetes">
        <div class="titulo-piquetes"><h1>Piquetes</h1></div>
        <div class="imagens-piquetes invi">
            <img src="Imagens/Baias_Piquetes/IMAGEM PIQUETES 1.png" class="photo" srcset="">
            <img src="Imagens/Baias_Piquetes/IMAGEM PIQUETES 2.png" class="photo" srcset="">
            <img src="Imagens/Baias_Piquetes/IMAGEM PIQUETES 3.png" class="photo" srcset="">
        </div>
        <div class="texto-piquetes">
            <p>Nos piquetes os cavalos ficam como na natureza, porém, com toda a atenção necessária: sal, ração, manejo diário e muito Coast Cros, capim de primeira qualidade, proporcionando uma alimentação muito mais saudável. Seguindo a nossa filosofia de manejo natural e respeito aos cavalos, todos têm direito a um mínimo de 4h diárias solto em um dos nossos 28 piquetes. A estadia no piquete é fundamental para cavalos competidores de Enduro – por prevenir a ocorrência de manqueiras, para potros e éguas prenhas, potros de esporte que estão em processo de doma, e também está sendo cada vez mais utilizado por cavalos de outras modalidades esportivas como salto e equitação de trabalho – por respeitar a natureza destes animais. </p>
        </div>
    </div>
    <div class="wave-secondary">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
    <div id="main-2" class="main-2">
        <div class="titulo-cards"><h1>Hospedagem</h1></div>
        <div class="cards-align">
            <div class="card invi">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"></path></svg>
                <div class="card__content">
                <p class="card__title">Plano Platinum</p>
                <p class="card__description">
                    <li>Baias de 14m<sup>2</sup></li>
                    <li>Capim Cidreira</li>
                    <li>Banho 2 vezes ao dia</li>
                    <li>Ferrageamento a cada 20 dias</li>
                    <li>Antedimento veterinário quinzenal</li>
                    <li>Escovação e higiene diária</li>
                </p>
                <a href="buy-page/platinum/index.php"><h4 class="saiba-mais">Clique para hospedar</h4></a>
                </div>
            </div>
                <div class="card invi">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"></path></svg>
                    <div class="card__content">
                    <p class="card__title">Plano Diamond</p>
                    <p class="card__description">
                        <li>Baias de 16m<sup>2</sup></li>
                        <li>Capim Coast Cross</li>
                        <li>Banho 3 vezes ao dia</li>
                        <li>Ferrageamento quinzenal</li>
                        <li>Antedimento veterinário semanal</li>
                        <li>Escovação e higiene diária</li>
                        <li>Desconto em cursos equestres</li>
                    </p>
                    <a href="buy-page/diamond/index.php"><h4 class="saiba-mais">Clique para hospedar</h4></a>
                    </div>
                </div>    
            <div class="card invi">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"></path></svg>
                <div class="card__content">
                <h1 class="card__title">Plano Golden</h1>
                <p class="card__description">
                    <li>Baias de 12m<sup>2</sup></li>
                    <li>Capim Santo</li>
                    <li>Banho 1 vezes ao dia</li>
                    <li>Ferrageamento mensal</li>
                    <li>Antedimento veterinário mensal</li>
                    <li>Escovação e higiene a cada 3 dias</li>
                </p>
                <a href="buy-page/golden/index.php"><h4 class="saiba-mais">Clique para hospedar</h4></a>
                </div>
            </div>           
        </div>
    </div>
    <div class="wave-primary">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
    <div id="main-3" class="main-3">
            <h1 class="titulo-timeline">Linha do tempo</h1>
            <div class="scroll">
                <div class="timeline">
                    <div class="outer">
                    <div class="card-timeline">
                        <div class="info">
                        <h3 class="title">Ano 2000</h3>
                        <p>A empresa de hospedagem de cavalos foi fundada no ano 2000, em uma bela propriedade nos arredores de uma pequena cidade. Naquela época, éramos apenas um punhado de entusiastas apaixonados por cavalos, com uma visão clara: oferecer instalações excepcionais para cavalos e seus proprietários. Lançamos nossos primeiros estábulos e pastagens e trabalhamos incansavelmente para estabelecer nossa reputação no mercado.</p>
                        </div>
                    </div>
                    <div class="card-timeline">
                        <div class="info">
                        <h3 class="title">Ano 2006</h3>
                        <p>Com o passar dos anos, nossa empresa cresceu de forma constante. Em 2006, expandimos nossas instalações para acomodar mais cavalos e adquirimos uma propriedade vizinha, aumentando nossa capacidade. O número de funcionários cresceu significativamente, e nosso compromisso com o bem-estar dos cavalos e a satisfação dos clientes se tornou ainda mais sólido.</p>
                        </div>
                    </div>
                    <div class="card-timeline">
                        <div class="info">
                        <h3 class="title">Ano 2010</h3>
                        <p>O ano de 2010 marcou um ponto importante em nossa jornada. Investimos em instalações de última geração, incluindo pistas cobertas, áreas de treinamento e serviços veterinários de alta qualidade. Além disso, começamos a priorizar a sustentabilidade e implementamos práticas ecológicas em nossa propriedade. Fomos reconhecidos como um dos principais destinos de hospedagem de cavalos na região.</p>
                        </div>
                    </div>
                    <div class="card-timeline">
                        <div class="info">
                        <h3 class="title">Ano 2015</h3>
                        <p>Em 2015, demos um salto significativo no mundo digital. Lançamos um site de reservas online e expandimos nossa clientela para além das fronteiras nacionais. Aumentamos nossa presença nas redes sociais e investimos em marketing digital especializado. Esses esforços nos renderam um prêmio de inovação no setor e nos posicionaram como uma referência em hospedagem de cavalos.</p>
                        </div>
                    </div>
                    <div class="card-timeline">
                        <div class="info">
                        <h3 class="title">Ano 2023</h3>
                        <p>À medida que avançamos em direção a 2023, celebramos nosso 23º aniversário. Continuamos a expandir nossas instalações e adotamos tecnologias avançadas para aprimorar nossos serviços e melhor atender às necessidades de nossos clientes e seus equinos. Nossa equipe de funcionários continua a crescer, e nossa paixão pela equitação, bem-estar animal e excelência na hospedagem de cavalos permanece inabalável.</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </body>
    </div>
    <!-- <div class="wave-secondary">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div> -->
    <div id="footer" class="footer">
        <div class="informacoes links">
            <h1>Contatos</h1>
            <a href="https://www.instagram.com/tnszpj/?hl=pt-br"><i class="fa-brands fa-instagram"></i> Instagram</a>
            <a href="https://www.linkedin.com/in/jtentis/"><i class="fa-brands fa-linkedin"></i> Linkedin</a>
            <a href="#"><i class="fa-brands fa-twitter"></i> Twitter</a>
            <a href="#"><i class="fa-brands fa-tiktok"></i> Tiktok</a>
        </div>
        <div class="informacoes nav">
            <h1>Página</h1>
            <a href="#Sobre">Sobre</a>
            <a href="#main-2">Hospedar</a>
            <a href="#main-3">Timeline</a>
            <a href="#">Contatos</a>
        </div>
        <div class="informacoes email">
            <h1>News Letter</h1>
            <h3>Email</h3>
            <form id="newsletter" action="index.php" method="post">
                <input type="email" class="email" name="email" placeholder="Digite seu email aqui...">
                <!-- <input type="submit" name="cadastrar" value="Cadastrar"> -->
                <a href="#"><button type="submit" name="cadastrar">Cadastrar</button></a>
            </form>
        </div>
    </div>
    <div class="copyright">Copyright &copy 2023 HorseCare | Copyright &copy 2023 HorseCare | Copyright &copy 2023 HorseCare | Copyright &copy 2023 HorseCare</div>
    <a href="#" class="para-o-topo">
		<span class="material-icons">arrow_upward</span>
	</a>
</body>
</html>