<!DOCTYPE html>
<html>
<head>
	<title>Enviando e-mail...</title>
</head>
<body>
<?php
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$assunto=$_POST['assunto'];
	$mensagem=$_POST['mensagem'];
?>
<?php
$to = "guilherme_7532@live.com";
$subject = "$assunto";
$message = "<strong> $nome<br /><br /> </strong> <strong> $email </strong><br /><strong>Assunto: </strong> $assunto <br /><br /> <strong>Mensagem: </strong> $mensagem";
$header = "MIME-Version 1.0\n";
$header .= "Content_type: text/html; charset=iso-8859-1\n";
$header .= "From: $email\n";
mail($to, $subject, $message, $header);
echo "Mensagem enviada com sucesso"
?>
</body>
</html>