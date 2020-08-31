<?php 
include "../PHPMailer/PHPMailerAutoload.php";

function emailCadastro(){
    $nomeAss = $_POST['nomeAss'];
    $cpfAss = $_POST['cpfAss'];
    $emailAss = $_POST['emailAss'];
    $numTelAss = $_POST['numTelAss'];
    $cepAss = $_POST['cepAss'];
    $bairroAss = $_POST['bairroAss'];
    $logradouroAss = $_POST['logradouroAss'];
    $complementoAss = $_POST['complementoAss'];
    $cidadeAss = $_POST['cidadeAss'];
    $estadoAss = $_POST['estadoAss'];
    
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = "mail.unioperadora.com.br";
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'enviar@unioperadora.com.br'; 
    $mail->Password = 'Campinas2020';
    
    $mail->SMTPOptions = array( 'ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) );
    
    $mail->From = $emailAss;
    
    $mail->FromName = $nomeAss;
    $mail->AddAddress('contato@operadorashow.com', 'Site Show Mobile');
    
    $recipients = array(
        'davidfico22@gmail.com' => 'Site - Show Mobile',
        'damico@mdk.net.br' => 'Site - Show Mobile',
        // ..
    );
    foreach($recipients as $email => $name)
    {
       $mail->AddBCC($email, $name);
    }
    
    $mail->IsHTML(true);
    
    $mail->CharSet = 'UTF-8';
    
    $mail->Subject = "Cadastro realizado ". $nomeAss . " " . $emailAss;
    
    $mail->Body =  "<table style='width: 100%; min-height: 30p; border: 1px solid #000000;'>".
                    "<tr style='width: 100%; height: 30px; background-color: #c65030; color: #FFFFFF'><td colspan='2'><h3>Formulário de cadastro</h3></td></tr>".
                    "<tr><td>Nome:</td><td>".$nomeAss."</td></tr>".
                    "<tr><td>CPF:</td><td>".$cpfAss."</td></tr>".
                    "<tr><td>E-mail:</td><td>".$emailAss."</td></tr>".
                    "<tr><td>Fone:</td><td>".$numTelAss."</td></tr>".
                    "<tr><td>CEP:</td><td>".$cepAss."</td></tr>".
                    "<tr><td>Logradouro:</td><td>".$logradouroAss."</td></tr>".
                    "<tr><td>Bairro:</td><td>".$bairroAss."</td></tr>".
                    "<tr><td>Compl.:</td><td>".$complementoAss."</td></tr>".
                    "<tr><td>Cidade:</td><td>".$cidadeAss."</td></tr>".
                    "<tr><td>Estado:</td><td>".$estadoAss."</td></tr>".
                    "</table>";
    
    $enviado = $mail->Send();
    
    $urlPag = "";
    
    if($enviado){
        header('Location: https://pag.ae/7Wms4R5Qs');
        autoResposta();
    }
}

function autoResposta(){
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = "mail.unioperadora.com.br";
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'enviar@unioperadora.com.br'; 
    $mail->Password = 'Campinas2020';
    
    $mail->SMTPOptions = array( 'ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) );
    
    $mail->From = "contato@operadorashow.com";
    
    $mail->FromName = "Show Mobile";
    $mail->AddAddress($emailAss, 'Site Show Mobile');
    
    $recipients = array(
        'davidfico22@gmail.com' => 'Site - Show Mobile',
        'damico@mdk.net.br' => 'Site - Show Mobile',
        // ..
    );
    foreach($recipients as $email => $name)
    {
       $mail->AddBCC($email, $name);
    }
    
    $mail->IsHTML(true);
    
    $mail->CharSet = 'UTF-8';
    
    $mail->Subject = "Cadastro enviado com sucesso! ";
    
    $mail->Body =  "<img src='http://operadorashow.com/testshow/images/resposta-show.jpg' alt='Boas vindas'>";
    
    $enviado = $mail->Send();
}

emailCadastro();
?>