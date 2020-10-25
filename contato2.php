<!DOCTYPE html>
<?php
$email = $_POST['email'];$nome = $_POST['nome'];$movil = $_POST['telefone'];$message = $_POST['message'];
$vowels = array("'", "%", " OR ", " or ");
$message = str_replace($vowels, "", $message);$movil = str_replace($vowels, "", $movil);$nome = str_replace($vowels, "", $nome);
$nome  =str_replace('"', '', $nome);$movil  =str_replace('"', '', $movil);$message  =str_replace('"', '', $message);


require_once 'conx.php';$mysqli = getConnexioncon();
$sql = "INSERT INTO CONTATOS (EMAIL,NOME,MOVIL,MENSAGEM,FEITO,ARTISTA) VALUES ('$email','$nome','$movil','$message','0','SHOW')";
if ($mysqli->query($sql) === TRUE) {}
 ?>
<html lang="en">
  <head>
    <title>Operadora Show </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv='refresh' content='0; url=obrigado.php'>
  </head>
  <body>
  </body>
</html>
