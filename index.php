<html>
<head>
<title>Formulario de contato</title>
</head>
<body>

<form name="contatcform" method="POST" action="sendemail.php">

Nome: <input type="text" name="nome">
<br><br>
E-mail: <input type="text" name="email">
<br><br>
Assunto: <input type="text" name="assunto">
<br><br>
Mensagem: <textarea name="txtmensagem" cols="35" rows="6"></textarea>
<br><br>

<input type = "submit" value="Enviar">
<input type = "reset" value="Limpar">


</form>

</body>
</html>