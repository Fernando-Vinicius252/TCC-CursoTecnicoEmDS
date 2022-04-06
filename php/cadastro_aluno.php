<?php
session_start();
ob_start();

$senha ='@FRAG12345678';
$nome_user ='Aluno';
$tipo_aluno =3;

$btnCadAluno = filter_input(INPUT_POST, 'btnCadAluno', FILTER_SANITIZE_STRING);
if ($btnCadAluno) {
    include_once 'conexao.php';
    $dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $erro = false;
    $dados_st = array_map('strip_tags', $dados_rc);
    $dados = array_map('trim', $dados_st);

    $cod_aluno = $dados['cod_aluno'];
    $nome_aluno = $dados['nome_aluno'];
    $turma_aluno = $dados['turma_aluno'];

    $result_usuario = "INSERT INTO aluno(cod_aluno, nome_user, nome_aluno, turma_aluno, senha_aluno, tipo_aluno) VALUES (
        '$cod_aluno',
        '$nome_user',
        '$nome_aluno', 
        '$turma_aluno',
        '$senha',
        '$tipo_aluno'
        )";


    $resultado_usuario = mysqli_query($sql, $result_usuario);
    if ($resultado_usuario) {
        echo '<script>alert("Aluno cadastrado com sucesso!");
        window.location="index_coordenador"</script>';

    } else {
        echo '<script>alert("Erro ao cadastrar o aluno!")</script>';
    }

    $result_usuario = "INSERT INTO usuario(nome_user, cod_user, senha_user, tipo_user) VALUES (
            '$nome_user',
            '$cod_aluno',
            '$senha',
            '$tipo_aluno'
            )";

    $resultado_usuario = mysqli_query($sql, $result_usuario);
    
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Cadastro de Aluno</title>
    <link rel="icon" type="image/png" sizes="240x240" href="../assets/img/Icone.png">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/arialregular.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="../assets/css/Poppins-Bold.css">
    <link rel="stylesheet" href="../assets/css/Poppins-Medium.css">
    <link rel="stylesheet" href="../assets/css/Poppins-Regular.css">
    <link rel="stylesheet" href="../assets/css/Poppins-SemiBold.css">
    <link rel="stylesheet" href="../assets/css/robota-noncommercialregular.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assets/css/Advanced-NavBar---Multi-dropdown.css">
    <link rel="stylesheet" href="../assets/css/Arial%20stylesheet.css">
    <link rel="stylesheet" href="../assets/css/Article-Clean.css">
    <link rel="stylesheet" href="../assets/css/Article-Dual-Column.css">
    <link rel="stylesheet" href="../assets/css/Article-List.css">
    <link rel="stylesheet" href="../assets/css/ebs-contact-form-1.css">
    <link rel="stylesheet" href="../assets/css/ebs-contact-form.css">
    <link rel="stylesheet" href="../assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="../assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="../assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/Login.css">
    <link rel="stylesheet" href="../assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="../assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/TD-BS4-Simple-Contact-Form-1.css">
    <link rel="stylesheet" href="../assets/css/TD-BS4-Simple-Contact-Form.css">
    <link rel="stylesheet" href="../assets/css/Team-Boxed.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg navigation-clean">
        <div class="container-fluid"><img class="navbar-logo" src="../assets/img/FRAG_Logo.png" style="width: 150px;"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="index_coordenador" style="font-size: 18px;font-family: robota-noncommercialregular;color: #880606;font-weight: bold;">EMPRESA</a></li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="font-size: 18px;font-family: robota-noncommercialregular;color: #814bc9;font-weight: bold;">CADASTRAR</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#" style="font-family: robota-noncommercialregular;">CADASTRO DE ALUNOS</a></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../php/gerenciamento" style="font-size: 18px;font-family: robota-noncommercialregular;color: #366f47;font-weight: bold;">GERENCIAMENTO</a></li>
                    <li class="nav-item"><a class="nav-link" href="sair" style="font-size: 18px;font-family: robota-noncommercialregular;color: #880606;font-weight: bold;">ENCERRAR</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="login-clean" style="box-shadow: inset 1px 0px 30px 0px, inset -1px -1px 30px 0px;">

       

         <form method="post" action="" style="border-top-style: dashed;border-top-color: rgb(188,22,22);border-right-style: dashed;border-right-color: rgb(33,157,196);border-bottom-style: dashed;border-bottom-color: rgb(97,128,95);border-left-style: dashed;border-left-color: rgb(112,74,186);">
            <h2 class="visually-hidden">Login Form</h2>
            <div class="illustration"><img src="../assets/img/Icone.png" style="width: 160px;">
                <h2 style="font-family: robota-noncommercialregular;color: rgb(0,0,0);">CADASTRO DE ALUNO</h2>
            </div>

            <div class="mb-3"><input class="form-control" type="number" name="cod_aluno" required placeholder="Código do Aluno: " style="color: rgb(0,0,0);"></div>
            <div class="mb-3"><input class="form-control" type="text" name="turma_aluno" required placeholder="Turma do Aluno: - 9°A" style="color: rgb(0,0,0);"></div>
            <div class="mb-3"><input class="form-control" type="text" name="nome_aluno" required placeholder="Nome do Aluno:" style="color: rgb(0,0,0);"></div>

<div class="mb-3"><button class="btn btn-primary d-block w-100" name="btnCadAluno" value="Cadastrar" type="submit" style="background: rgb(62,150,78);">Cadastrar</button></div>        </form>
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
    <script src="../assets/js/Advanced-NavBar---Multi-dropdown.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="../assets/js/Simple-Slider.js"></script>
</body>

</html>