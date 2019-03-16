<?php
//Carregado em funcaoPassarEmail.php
//Carregado em passarEmail.php
	function configurarCabecalhos ($remetente, $respostaPara, $copiaPara = NULL, $copiaOcultaPara = NULL) {
		//Modo padrão
		$headers   = array();
		$headers[] = "MIME-Version: 1.0";
		$headers[] = "Content-type: text/html; charset=UTF-8";
		$headers[] = "From: " . $remetente;
		$headers[] = "Reply-To: ". $respostaPara;
		if (isset($copiaPara)) {
			$headers[] = "Cc: ". $copiaPara;
		}
		if (isset($copiaOcultaPara)) {
			$headers[] = "Bcc: " . $copiaOcultaPara;
		}
		$headers[] = "X-Mailer: PHP/". phpversion();
		$headers = implode("\r\n", $headers);
		return $headers;
	}

	function configurarCabecalhos1 ($remetente, $respostaPara, $copiaPara = NULL, $copiaOcultaPara = NULL) {
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

		// Additional headers
		$headers .= "From: " . $remetente . "\r\n";//$remetente é no formato: "Fulano <fulaninho@example.com>"
		$headers .= "Reply-To: " . $respostaPara . "\r\n";//$respostaPara é no formato "Recipient Name <receiver@domain3.com>"
		if (isset($copiaPara)) {
			$headers .= "Cc: " . $copiaPara . "\r\n";//$copiaPara pode ser do tipo "birthdayarchive@example.com"
		}
		if (isset($copiaOcultaPara)) {
			$headers .= "Bcc: " . $copiaOcultaPara . "\r\n";//$copiaOcultaPara pode ser do tipo "birthdaycheck@example.com"
		}
		$headers .= "X-Mailer: PHP/" . phpversion();
		return $headers;
	}
	
	function configurarCabecalhos2 (array $elementos) {
		//Modo alternativo
		$headers   = array();
		$headers[] = "MIME-Version: 1.0";
		$headers[] = "Content-type: text/html; charset=UTF-8";
		$headers[] = "From: " . $elementos['remetente'];
		$headers[] = "Reply-To: ". $elementos['respostaPara'];
		if (array_key_exists("copiaPara", $elementos)) {
			$headers[] = "Cc: ". $elementos['copiaPara'];
		}
		if (array_key_exists("copiaOcultaPara", $elementos)) {
			$headers[] = "Bcc: " . $elementos['copiaOcultaPara'];
		}
		$headers[] = "X-Mailer: PHP/". phpversion();
		$headers = implode("\r\n", $headers);
		return $headers;
	}
?>	