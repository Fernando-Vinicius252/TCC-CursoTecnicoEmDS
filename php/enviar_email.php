<?php

error_reporting(0);

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $mensagem = $_POST['mensagem'];
  
require("PHPMailer-master/src/PHPMailer.php");
require("PHPMailer-master/src/SMTP.php");
 $mail = new PHPMailer\PHPMailer\PHPMailer();
 
 $mail->IsSMTP(); // enable SMTP
 
 $mail->SMTPAuth = true; // authentication enabled
 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
 $mail->Host = "smtp.titan.email";
 $mail->Port = 465; // or 465
 $mail->IsHTML(true);
 $mail->Username = "tcc3edsa@fraggamedev.social";
 $mail->Password = "frag@gamedev4";
 $mail->SetFrom($mail->Username,"Startup FRAG");
 $mail->Subject = "Contato - FRAG";
 
 $conteudo_email = "Você recebeu uma mensagem de $nome ($email):<br><br>
    
    Telefone:
    $telefone<br><br>

    Mensagem:<br>
    $mensagem";

    $mail->IsHTML(true);
    $mail->Body = $conteudo_email;
    
 $mail->AddAddress("tcc3edsa@fraggamedev.social");
    if($mail->Send()){
          echo '<script>alert("Email enviado com sucesso!")
          window.location="../html/contato"</script>';

         
          

      


    }else{
        echo"Falha ao enviar o email: " . $mail->ErrorInfo;
    }
      
 
 
?>

