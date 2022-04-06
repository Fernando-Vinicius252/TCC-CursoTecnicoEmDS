<?php

session_start();

if(!isset($_SESSION["login_session"]) || !isset($_SESSION["nome_session"]))
{
// Usuário não logado! Redireciona para a página de login
header("Location: login");
exit;
}




?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>F.R.A.G. | Bem vindo ao site oficial da Teen FRAG game dev.</title>
    <link rel="icon" type="image/png" sizes="240x240" href="../assets/img/Icone.png">
    	
	<!--  Index CSS -->
	<link rel="stylesheet" href="../assets/css/Index.css">
	
	<!--  Responsivo CSS -->
	<link rel="stylesheet" href="../assets/css/Responsive.css">
	
	<!--  Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	
	<!--  Login CSS -->
	<link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/Login.css">
	
	<!--  Contato CSS -->
	<link rel="stylesheet" href="../assets/css/ebs-contact-form-1.css">
    <link rel="stylesheet" href="../assets/css/ebs-contact-form.css">
	
	<!--  Navegation CSS -->
	<link rel="stylesheet" href="../assets/css/Advanced-NavBar---Multi-dropdown.css">
	<link rel="stylesheet" href="../assets/css/Navigation-Clean.css">
	
	<!--  Fontes CSS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">

    <link rel="stylesheet" href="../assets/css/robota-noncommercialregular.css">
	<link rel="stylesheet" href="../assets/css/Arial%20stylesheet.css">
	<link rel="stylesheet" href="../assets/css/arialregular.css">
	<link rel="stylesheet" href="../assets/css/Poppins-Bold.css">
    <link rel="stylesheet" href="../assets/css/Poppins-Medium.css">
    <link rel="stylesheet" href="../assets/css/Poppins-Regular.css">
    <link rel="stylesheet" href="../assets/css/Poppins-SemiBold.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
	
	<!--  Footer CSS -->
    <link rel="stylesheet" href="../assets/css/Footer-Basic.css">
	
	<!--  Animações CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
	
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg navigation-clean">
        <div class="container-fluid"><img class="navbar-logo" src="../assets/img/FRAG_Logo.png" style="width: 150px;"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="#" style="font-size: 18px;font-family: robota-noncommercialregular;color: #880606;font-weight: bold;">EMPRESA</a></li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="font-size: 18px;font-family: robota-noncommercialregular;color: #814bc9;font-weight: bold;">CADASTRAR</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="../php/cadastro_aluno" style="font-family: robota-noncommercialregular;">CADASTRO DE ALUNOS</a></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../php/gerenciamento" style="font-size: 18px;font-family: robota-noncommercialregular;color: #366f47;font-weight: bold;">GERENCIAMENTO</a></li>
                    <li class="nav-item"><a class="nav-link" href="../php/sair" style="font-size: 18px;font-family: robota-noncommercialregular;color: #880606;font-weight: bold;">ENCERRAR</a></li>
                </ul>
            </div>
        </div>
    </nav>
     <div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background: url(../assets/img/Frag_Integrantes.png) center top / cover no-repeat;"></div>
                <div class="swiper-slide" style="background: url(../assets/img/Codigos1.png) center center / cover no-repeat;"></div>
                <div class="swiper-slide" style="background: url(../assets/img/Codigos2.png) center center / cover no-repeat;"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div data-bss-hover-animate="pulse" class="swiper-button-prev" style="background: url(&quot;../assets/img/arrow_glitch_left.png&quot;) center / contain no-repeat;color: rgba(255,255,255,0);"></div>
            <div data-bss-hover-animate="pulse" class="swiper-button-next" style="background: url(&quot;../assets/img/arrow_glitch_right.png&quot;) center / contain no-repeat;color: rgba(255,255,255,0);"></div>
        </div>
    </div>
    <section class="article-list" id="SectionWelcome">
        <div class="container">
            <div class="intro">
                <h1 class="text-center" style="font-family: robota-noncommercialregular;">BEM VINDO AO FRAG!</h1>
            </div>
            <div class="row justify-content-center articles">
                <div class="col-sm-6 col-md-4 item" style="padding-right: 16px;padding-left: 16px;">
                    <div data-bss-hover-animate="pulse"><img class="img-fluid" data-aos="fade-down" src="../assets/img/foto1.png" style="margin: 0px;padding: 0px;border-radius: 0px;border: 6px solid rgba(235,235,235,1) ;"></div>
                    <h3 data-aos="fade-right" data-aos-duration="900" class="name" style="font-size: 22px;font-family: arialregular;">Quem somos?<br></h3>
                    <p data-aos="fade" data-aos-duration="1700" data-aos-delay="300" class="description" style="text-align: left;font-size: 15px;font-family: Poppins, sans-serif;">Nós somos a&nbsp;<strong>FRAG</strong>, uma startup indie desenvolvedora de jogos eletrônicos, chegamos no mercado há pouco tempo mas estamos aptos na criação e desenvolvimento de jogos.<br></p><a class="action" href="#"></a>
                </div>
                <div class="col-sm-6 col-md-4 item" style="padding-right: 16px;padding-left: 16px;">
                    <div data-bss-hover-animate="pulse"><img class="img-fluid" data-aos="fade-down" src="../assets/img/print_jogo.png" style="border-radius: 0px;border: 6px solid rgba(235,235,235,1) ;"></div>
                    <h3 data-aos="fade-right" data-aos-duration="900" data-aos-delay="300" class="name" style="font-size: 22px;font-family: arialregular;">O que oferecemos?<br></h3>
                    <p data-aos="fade" data-aos-duration="1700" data-aos-delay="300" class="description" style="text-align: left;font-size: 15px;font-family: Poppins, sans-serif;">Nós oferecemos o nosso primeiro jogo focado na conclusão do Ensino Fundamental dos alunos de sua escola. Podendo avaliá-lo e utilizar a nota e informações do jogo como forma de recuperação.<br></p><a class="action" href="#"></a>
                </div>
                <div class="col-sm-6 col-md-4 item" style="padding-right: 16px;padding-left: 16px;">
                    <div data-bss-hover-animate="pulse"><img class="img-fluid" data-aos="fade-down" src="../assets/img/ETECJA.png" style="border-radius: 0px;border: 6px solid rgba(235,235,235,1) ;"></div>
                    <h3 data-aos="fade-right" data-aos-duration="900" data-aos-delay="600" class="name" style="font-size: 22px;font-family: arialregular;">Nossas aprovações<br></h3>
                    <p data-aos="fade" data-aos-duration="1700" data-aos-delay="300" class="description" style="text-align: left;font-size: 15px;font-family: Poppins, sans-serif;">O nosso projeto foi avaliado por professores de escola de Ensino Médio e Fundamental, garantindo a verificação e qualidade do nosso software.<br></p><a class="action" href="#"></a>
                </div>
            </div>
        </div>
    </section>
    <section class="banner" id="SectionBanner">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12 text-start" style="text-align: center;">
                    <h2 id="LabelHistory" >NOSSA HISTORIA <br>COMO DESENVOLVEDORES<br></h2>
                </div>
            </div>
        </div>
    </section>
    <section class="article-clean"  id="SectionSobre">
        <div class="container" style="background: rgba(255,255,255,0.67);border-radius: 20px;"">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="text-center" style="margin: 10px 0px 20px;color: rgb(0,0,0);font-family: robota-noncommercialregular;">SOBRE</h2><img data-aos="slide-right" data-aos-duration="600" class="img-fluid" src="../assets/img/Frag_Integrantes_2.jpeg" style="border-radius: 0px;border: 6px solid rgba(235,235,235,1);margin-bottom: 30px;width: 856px;">
                    <h3 style="text-align: left;margin-bottom: 20px;color: rgb(0,0,0);font-family: robota-noncommercialregular;">FRAG<br></h3>
                    <p data-aos="fade" data-aos-duration="500" style="font-size: 15px;color: rgb(0,0,0);font-family: Poppins, sans-serif;">A FRAG foi criada virtualmente no início do ano de 2021 graças ao início da elaboração do TCC tendo 4 estudantes da escola Etec Jardim Ângela no grupo utilizando conhecimentos obtidos no curso de Desenvolvimento de Sistemas para sua realização.<br><br></p>
                </div>
                <div class="col-md-4"><br>
                    <h3 style="text-align: left;margin-bottom: 30px;color: rgb(0,0,0);font-family: arialregular;">Primeiro Jogo<br></h3>
                    <p data-aos="fade" data-aos-duration="500" data-aos-delay="300" style="font-size: 15px;color: rgb(0,0,0);font-family: Poppins, sans-serif;">No dia 10 de março, decidimos dar inicio ao projeto do jogo que tem como principal objetivo auxiliar professores a medir o nível do aprendizado de seus alunos em determinadas matérias através da resolução de um quiz dentro do próprio jogo.<br><br></p>
                </div>
            </div>
        </div>
    </section>
    <section class="team-boxed" id="SectionEquipe">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="font-family: robota-noncommercialregular;">EQUIPE DE DESENVOLVEDORES</h2>
            </div>
			<div class="row justify-content-center people">
                <div class="col-md-6 col-lg-4 item" style="width: 330px;">
                    <div class="box" style="height: 535px;"><img class="rounded-circle" src="../assets/img/Fernando.png">
                        <h3 class="name">Fernando Vinicius</h3>
                        <p data-aos="zoom-in-right" data-aos-duration="100" class="title">Front-End</p>
                        <p data-aos="fade" data-aos-duration="900" class="description" style="font-family: arialregular;color: var(--bs-gray);text-align: left;">Responsável por desenvolver o HTML, CSS e JS do website encarregado pela divulgação da empresa e do software, além do gerenciamento do coordenador, tornando o design e layout mais agradável.<br></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item" style="width: 330px;">
                    <div class="box" style="height: 535px;"><img class="rounded-circle" src="../assets/img/Renato.png">
                        <h3 class="name">Renato Caetite</h3>
                        <p data-aos="zoom-in-right" data-aos-duration="100" class="title">Back-end</p>
                        <p data-aos="fade" data-aos-duration="900" class="description" style="font-family: arialregular;color: var(--bs-gray);text-align: left;">Produziu e desenvolveu a parte interna do site utilizando principalmente a linguagem de programação PHP e o sistema de gerenciamento de banco de dados MySQL, visando desde o cadastro e login até o gerenciamento de dados.<br></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item" style="width: 330px;">
                    <div class="box" style="height: 535px;"><img class="rounded-circle" src="../assets/img/Ana_Clara.png">
                        <h3 class="name">Ana Clara</h3>
                        <p data-aos="zoom-in-right" data-aos-duration="100" class="title">designer de&nbsp;<strong>games</strong><br></p>
                        <p data-aos="fade" data-aos-duration="900" class="description" style="font-family: arialregular;color: var(--bs-gray);text-align: left;">Criadora e desenvolvedora do nosso primeiro jogo, atuando em todas as etapas da produção, desde a ideia inicial, programação, design, storytelling e animação.<br></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item" style="width: 330px;">
                    <div class="box" style="height: 535px;"><img class="rounded-circle" src="../assets/img/Giovanni.png">
                        <h3 class="name">Giovanni</h3>
                        <p data-aos="zoom-in-right" data-aos-duration="100" class="title">Analista de Dados</p>
                        <p data-aos="fade" data-aos-duration="900" class="description" style="font-family: arialregular;color: var(--bs-gray);text-align: left;">Desenvolveu e implementou análises de dados, sistemas de coleta de dados e outras estratégias que otimizem a eficiência e a qualidade estatística, além de manter e propiciar segurança nos bancos de dados.<br></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="article-dual-column">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="intro" style="text-align: center;">
                        <h1 class="text-center" style=" color: rgb(0,0,0); font-family: robota-noncommercialregular; font-weight: bold;">NOSSO PRIMEIRO JOGO</h1>
						<img class="img-fluid" data-aos="fade" data-aos-duration="600" src="../assets/img/Image_jogo.png" style="margin: 0px;padding: 0px;border-radius: 0px;border: 6px solid rgba(235,235,235,1);width: 800px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-lg-3 offset-md-1">
                    <div class="toc">
                        <h6 style="color: rgb(111,65,170);font-family: Poppins-Regular;padding: 0px;padding-bottom: 15px;"><strong>OBJETIVOS DO JOGO:</strong><br></h6>
                        <ul>
                            <li><a style="color: rgb(105,105,105);" >- Revisão do conteúdo para os alunos do Ensino Fundamental<br></a> </li>
                            <li><a style="color: rgb(105,105,105);">- Verificar o progresso dos alunos</a></li>
                            <li><a style="color: rgb(105,105,105);">- Evidenciar as dificuldades dos alunos</a></li>
                            
                            <li><a></a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10 col-lg-7 offset-md-1 offset-lg-0">
                    <div class="text">
                        <h2 style="color: rgb(0,0,0);font-family: Poppins-Regular;">OBJETIVO GERAL<br></h2>
                        <p style="color: rgb(42,42,42);">Desejamos que a escola consiga manter um gerenciamento do progresso dos alunos em cada matéria e tomar ciência da presença de uma deficiência em alguma matéria, além de providenciar uma revisão dos conceitos do ensino fundamental para o aluno.<br></p>
                        <figure class="figure"></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-basic" id="idfooter">
	<div>
        <div class="social">
			<a href="https://www.youtube.com/channel/UC31moEi7FNsgVhbgzC19EhA" target="_blank"><i class="icon ion-social-youtube" style="color: #de1616;"></i></a>
			<a href="https://twitter.com/startupfrag" target="_blank"><i class="icon ion-social-twitter" style="color: rgb(25,185,237);"></i></a>
			<a href=" https://www.instagram.com/startupfrag/" target="_blank"><i class="icon ion-social-instagram" style="color: #7142ac;"></i></a>
			<a href="https://www.facebook.com/profile.php?id=100074268226322" target="_blank"><i class="icon ion-social-facebook" style="color: rgb(54,139,79);"></i></a>
		</div>
		<div style="text-align: center;padding-bottom: 25px;"><img src="../assets/img/FRAG_Logo.png" style="width: 200px;"></div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="../html/Termos_de_Uso" >Termos de Uso</a></li>
            <li class="list-inline-item"><a href="../html/Politica_de_Cookies" >Politica de Cookies</a></li>
            <li class="list-inline-item"><a href="../html/Politica_de_Privacidade" >Política de Privacidade<br></a></li>
        </ul>
        <p class="copyright">© 2021 FRAG. Todos os direitos reservados.<br></p>
	</div>
    </footer>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="../assets/js/Advanced-NavBar---Multi-dropdown.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="../assets/js/Simple-Slider.js"></script>
</body>

</html>