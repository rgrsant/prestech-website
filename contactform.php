<?php

if (isset($_POST['mail']) && !empty($_POST['mail'])) {
	$name = addslashes ($_POST['name']);
	$subject = addslashes ($_POST['subject']);
	$mailFrom = addslashes (['mail']);
	$message = addslashes ($_POST['message']);

	$mailTo = "suporte@prestech.com.br";
	$body = "Nome: ".$name. "\n".
			"Email: ".$mail. "\n".
			"Mensagem: ".$message;

	$header = "From:comercial@prestech.com.br"."\r\n".
				"Reply-To:".$mail."\r\n".
				"X-Mailer:PHP/".phpversion();


	if(mail($mailTo, $subject, $body, $header)){
		echo("Email enviado com sucesso!");
	}
	else{
		echo("Email não pôde ser enviado.");
	}
}

?>