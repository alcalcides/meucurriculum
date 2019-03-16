<?php
//Carregado em passarEmail.php
//Carregado em funcaoPassarEmail.php
	//Configura o corpo do email
	function configurarMensagem ($message, $url = null) {
		//Uma linha não pode ter mais de 70 caracteres
		$message = wordwrap($message,70);
		//Evitar que uma nova linha que começa com ponto final seja removida
		if ($url) {
			$message = str_replace("\n", "<br>", $message);
			$message = str_replace("<br>.", "<br>..", $message);
		}
		else {
			$message = str_replace("\n.", "\n..", $message);
		}
		return $message;
	}
?>