<?php

session_start();

if(!isset($_SESSION["login_session"]) || !isset($_SESSION["nome_session"]))
{
// Usuário não logado! Redireciona para a página de login
header("Location:/html/login");
exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <style> 

@media only screen and (min-width: 800px) {
 .hide-mobile 
 {display:none;}
}
</style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Jogo - FRAG</title>
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
<a href="javascript:history.back()" onclick="location.href = document.referrer;" class="btn btn-outline-dark"  style="margin-top: 10px; margin-left:10px;">Voltar</a>
<br><br>

<p class="hide-mobile" style="text-align:center; margin-top:62%; font-size:15pt">Jogo incompatível em dispositivos mobile :(</p>

<div class="container d-none d-md-block">
<iframe frameborder="0" src="https://itch.io/embed-upload/4880471?color=333333" allowfullscreen="" width="100%" height="540"><a href="https://frag-game-dev.itch.io/frag-jogo">Play FRAG - Jogo on itch.io</a></iframe>
</div>

   <form method="post" action="jogo_concluido";>

	<div class="text-center d-none d-md-block"><button class="btn btn-primary" name="btnEncerrar" value="Encerrar" type="submit" style="width: 200px;background: var(--bs-red);">Encerrar</button></div>
	</form>
</form>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Advanced-NavBar---Multi-dropdown.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>