<?php 

include "PHPMailer/PHPMailerAutoload.php";

class planoControle{
    function assinatura($plano){
        switch($plano){
            case 1:
                $tituloPlano = 'Plano controle 5Gb';
                $preco = '49,90';
            break;

            case 2:
                $tituloPlano = 'Plano controle 10Gb';
                $preco = '59,90';
            break;

            case 3:
                $tituloPlano = 'Plano controle 15Gb';
                $preco = '79,90';
            break;

        }

        $detalhesPlanos = (object)[
            'id' => $plano,
            'plano' => $tituloPlano,
            'preco' => $preco
        ];

        $detalhesPlanos = json_encode($detalhesPlanos);
        return $detalhesPlanos;
    }

    function contratar($plano){
        $tipoCliente = $_POST['tipoCliente'];
        $nomeAss = $_POST['nomeAss'];
        $cpfAss = $_POST['cpfAss'];
        $rgAss = $_POST['rgAss'];
        $emailAss = $_POST['emailAss'];
        $numDDDAss = $_POST['numDDDAss'];
        $numTelAss = $_POST['numTelAss'];
        $cepAss = $_POST['cepAss'];
        $bairroAss = $_POST['bairroAss'];
        $logradouroAss = $_POST['logradouroAss'];
        $numeroAss = $_POST['numeroAss'];
        $complementoAss = $_POST['complementoAss'];
        $cidadeAss = $_POST['cidadeAss'];
        $estadoAss = $_POST['estadoAss'];
        $cellDDD = $_POST['cellDDD'];
        $iccidAss = $_POST['iccidAss'];

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = "mail.unioperadora.com.br";
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = 'enviar@unioperadora.com.br'; 
        $mail->Password = 'Campinas2020';

        $mail->SMTPOptions = array( 'ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) );

        $mail->From = "damico@mdk.net.br";

        $mail->FromName = $Name;
        $mail->AddAddress('damico@mdk.net.br', 'Site');

        $recipients = array(
            'davidfico22@gmail.com' => 'Site - ',
            'email@dominio' => 'Site - ',
            // ..
        );
        foreach($recipients as $email => $name)
        {
           $mail->AddBCC($email, $name);
        }

        $mail->IsHTML(true);

        $mail->CharSet = 'UTF-8';

        $mail->Subject = "Assunto";

        $mail->Body =  "<h3 style='font-family:Arial'>". $nomeAss ."</h3>";

        $nome_arquivo = $_FILES['pdfFile']['name'];
        $tipo_arquivo = $_FILES['pdfFile']['type'];
        //var_dump($_FILES['arquivo']);
        $diretorio = 'attachment/';
        if($tipo_arquivo == 'image/png' || $tipo_arquivo == 'image/jpg' || $tipo_arquivo == 'pdf'){
            move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$nome_arquivo);         
            // Opcional: Anexos 
            $mail->AddAttachment("http://...".$diretorio.$nome_arquivo, $mome_arquivo); 
        }

        $enviado = $mail->Send();

        $urlPag = "";
        switch ($plano)
        {
            case 1:
                $urlPag = "http://pag.ae/7V-Q9wD9r";
                break;
            case 2:
                $urlPag = "http://pag.ae/7VZvv-A9u";
                break;
            case 3:
                $urlPag = "http://pag.ae/7VZvBgoCR";
                break;
            case 4:
                $urlPag = "http://pag.ae/7VZvBLHYR";
                break;
            case 5:
                $urlPag = "http://pag.ae/7VZvC8vxQ";
                break;
            case 6:
                $urlPag = "http://pag.ae/7VZvCuier";
                break;
        }

        if($enviado){
            header(`Location: $urlPag`);
        }
    }
}
?>