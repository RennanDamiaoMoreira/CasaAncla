

<?php
if(isset($_POST['email']) && !empety($_POST['email']))
{
$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);
$to = "contato@casaancla.com";
$subject = "Contato - Vindo do site";
$body = "Nome: ":.$nome."\r\n".
"Email: ".$email."\r\n".
"Mensagem: ".$mensagem;
$header = "From: contato@casaancla.com"."\r\n".
"Reply-To:".$email."\r\n".
"X=Mailer:PHP/".phpversion();
if(mail($to, $subject, $body, $header)){
echo("Email enviado com sucesso!");
}else{
echo("O email não pode ser enviado");
}
}