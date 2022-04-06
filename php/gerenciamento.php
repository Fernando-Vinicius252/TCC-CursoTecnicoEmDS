<?php

session_start();

if(!isset($_SESSION["login_session"]) || !isset($_SESSION["nome_session"]))
{
// Usuário não logado! Redireciona para a página de login
header("Location: ../html/login");
exit;
}

?>

<?php
session_start();
include "conexao.php";
$conexao = "SELECT * FROM jogo";
$result = $sql->query($conexao);

?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Gerenciamento</title>
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

<body id="tudo">
    <nav class="navbar navbar-light navbar-expand-lg navigation-clean" style="box-shadow: 0px 0px 7px;">
        <div class="container-fluid"><img class="navbar-logo" src="../assets/img/FRAG_Logo.png" style="width: 150px;"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="index_coordenador" style="font-size: 18px;font-family: robota-noncommercialregular;color: #880606;font-weight: bold;">EMPRESA</a></li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="font-size: 18px;font-family: robota-noncommercialregular;color: #814bc9;font-weight: bold;">CADASTRAR</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="cadastro_aluno" style="font-family: robota-noncommercialregular;">CADASTRO DE ALUNOS</a></div>
                    </li>
                    <li class="nav-item"><a class="nav-link active" href="#" style="font-size: 18px;font-family: robota-noncommercialregular;color: #366f47;font-weight: bold;">GERENCIAMENTO</a></li>
                    <li class="nav-item"><a class="nav-link" href="sair" style="font-size: 18px;font-family: robota-noncommercialregular;color: #880606;font-weight: bold;">ENCERRAR</a></li>
                </ul>
            </div>
        </div>
    </nav>
	<div id="dados">
	<h1 style="font-family: Poppins-Regular;text-align: center;margin: 20px;color: rgb(54,111,95);margin-right: 0px;margin-left: 0px;border-color: rgb(54,111,71);">Gerenciamento dos Alunos</h1>
<div class="container-fluid" style="margin-bottom: 30px">
        <div class="row">
            <div class="col-md-6" id="LeftCol">
                <h6 class="text-start">Física: 1 a 3<br>Matemática: 4 a 6<br>História: 7 a 8<br>Geografia:&nbsp; 9 a 11</h6>
            </div>
            <div class="col-md-6" id="RightCol">
                <h6 class="text-end">Química: 12 a 14<br>Biologia: 15 a 17<br>Língua Portuguesa: 18 a 20<br>Língua Inglesa: 21 a 23</h6>
            </div>
        </div>
    </div>
	<h5 style="text-align: right; margin-right:10px; color: rgb(254,15,0);">0 = Errado / 1 = Certo</h5>
    
    <div>
        <div class="table-responsive">
            <table style = "font-size:10pt" class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Código</th>
                    <th scope="col">Aluno</th>
                    <th scope="col">Q1</th>
                     <th scope="col">Q1</th>
                      <th scope="col">Q3</th>
                       <th scope="col">Q4</th>
                        <th scope="col">Q5</th>
                         <th scope="col">Q6</th>
                          <th scope="col">Q7</th>
                           <th scope="col">Q8</th>
                            <th scope="col">Q9</th>
                             <th scope="col">Q10</th>
                              <th scope="col">Q11</th>
                               <th scope="col">Q12</th>
                                <th scope="col">Q13</th>
                                 <th scope="col">Q14</th>
                                  <th scope="col">Q15</th>
                                   <th scope="col">Q16</th>
                                    <th scope="col">Q17</th>
                                     <th scope="col">Q18</th>
                                      <th scope="col">Q19</th>
                                       <th scope="col">Q20</th>
                                        <th scope="col">Q21</th>
                                         <th scope="col">Q22</th>
                                          <th scope="col">Q23</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($user_data = mysqli_fetch_assoc($result)){
                    echo"<tr>";
                    echo"<td>".$user_data['cod_registro']."</td>";
                    echo"<td>".$user_data['cod_aluno']."</td>";
                    echo"<td>".$user_data['nome_aluno']."</td>";
                    echo"<td>".$user_data['q1']."</td>";
                    echo"<td>".$user_data['q2']."</td>";
                    echo"<td>".$user_data['q3']."</td>";
                    echo"<td>".$user_data['q4']."</td>";
                    echo"<td>".$user_data['q5']."</td>";
                    echo"<td>".$user_data['q6']."</td>";
                    echo"<td>".$user_data['q7']."</td>";
                    echo"<td>".$user_data['q8']."</td>";
                    echo"<td>".$user_data['q9']."</td>";
                    echo"<td>".$user_data['q10']."</td>";
                    echo"<td>".$user_data['q11']."</td>";
                    echo"<td>".$user_data['q12']."</td>";
                    echo"<td>".$user_data['q13']."</td>";
                    echo"<td>".$user_data['q14']."</td>";
                    echo"<td>".$user_data['q15']."</td>";
                    echo"<td>".$user_data['q16']."</td>";
                    echo"<td>".$user_data['q17']."</td>";
                    echo"<td>".$user_data['q18']."</td>";
                    echo"<td>".$user_data['q19']."</td>";
                    echo"<td>".$user_data['q20']."</td>";
                    echo"<td>".$user_data['q21']."</td>";
                    echo"<td>".$user_data['q22']."</td>";
                    echo"<td>".$user_data['q23']."</td>";
                    echo"</tr>";
                }
                
                ?>
                
            </tbody>
         </table>
        </div>
    </div>
	</div>
    
    <form>  
    <div class="d-flex justify-content-center">
	<input type="button" value="Imprimir" class="btn btn-outline-dark btn btn btn-default" onClick="window.print()" style="font-size: 14px;font-family: arial; background-color:#000000; color: #FFFFFF; width:150px; font-weight: bold;"/>
  </div>
</form>

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/Advanced-NavBar---Multi-dropdown.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="../assets/js/Simple-Slider.js"></script>
</body>

</html>










		


  