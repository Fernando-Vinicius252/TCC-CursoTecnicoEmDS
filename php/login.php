<?php
session_start();
include_once("conexao.php");

$login = $_POST['cod_user'];
$senha = $_POST['senha_user'];


$logar = $sql->query("SELECT * FROM usuario WHERE cod_user='$login' AND senha_user='$senha'");

while ($linha = mysqli_fetch_array($logar)) {
    $tipo = $linha['tipo_user'];
    $nome = $linha['nome_user'];
}

$contagem = mysqli_num_rows($logar);
if ($contagem == 1 and $tipo == 3) {
    $_SESSION['login_session'] = $login;
    $_SESSION['senha_session'] = $senha;
    $_SESSION['tipo_session'] = $tipo;
	$_SESSION['nome_session']  = $nome;
    //vai liberar o acesso á pagina principal
	header("Location:jogo");
    

} elseif ($contagem == 1 and $tipo == 2) {
    $_SESSION['login_session'] = $login;
    $_SESSION['senha_session'] = $senha;
    $_SESSION['tipo_session']  = $tipo;
	$_SESSION['nome_session']  = $nome;
    //vai liberar o acesso á pagina principal2
	header("Location:index_diretor");

} elseif ($contagem == 1 and $tipo == 1) {
    $_SESSION['login_session'] = $login;
    $_SESSION['senha_session'] = $senha;
    $_SESSION['tipo_session'] = $tipo;
	$_SESSION['nome_session']  = $nome;
    //vai liberar o acesso á pagina principal3
	header("Location:index_coordenador");
	

} else {
    
     echo '<script>alert("Usuário ou senha incorretos!");
     window.location="/html/login"</script>';

    unset($_SESSION['login_session']);
    unset($_SESSION['senha_session']);
    unset($_SESSION['tipo_session']);
	unset($_SESSION['nome_session']);
	
	

    
}



