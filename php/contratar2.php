<?php
$vowels = array("'", "%", " OR ", " or ");
$nomeAss = str_replace($vowels, "", $nomeAss);$cpfAss = str_replace($vowels, "", $cpfAss);$numTelAss = str_replace($vowels, "", $numTelAss);
$cepAss = str_replace($vowels, "", $cepAss);$bairroAss = str_replace($vowels, "", $bairroAss);$logradouroAss = str_replace($vowels, "", $logradouroAss);
$complementoAss = str_replace($vowels, "", $complementoAss);$cidadeAss = str_replace($vowels, "", $cidadeAss);$estadoAss = str_replace($vowels, "", $estadoAss);

$nomeAss  =str_replace('"', '', $nomeAss);$cpfAss  =str_replace('"', '', $cpfAss);$numTelAss  =str_replace('"', '', $numTelAss);
$cepAss  =str_replace('"', '', $cepAss);$bairroAss  =str_replace('"', '', $bairroAss);$logradouroAss  =str_replace('"', '', $logradouroAss);
$complementoAss  =str_replace('"', '', $complementoAss);$cidadeAss  =str_replace('"', '', $cidadeAss);$estadoAss  =str_replace('"', '', $estadoAss);



require_once '../conx.php';$mysqli = getConnexionped();
$sql = "INSERT INTO PEDIDOS (EMAIL,NOME,MOVIL,CPF,ENDERECO,COMPLEMENTO,CEP,BAIRRO,CIDADE,ESTADO,COBRADO,ENVIADO,ARTISTA,PLANO)
VALUES ('$emailAss','$nomeAss','$numTelAss','$cpfAss','$logradouroAss','$complementoAss','$cepAss','$bairroAss','$cidadeAss','$estadoAss','0','0','KLB','$tarAss')";
if ($mysqli->query($sql) === TRUE) {}
 ?>
