<?php
//Esta função passa emails
	/* 
	São strings:
		$remetente 
		$destinatario
		$respostaPara
		$copiaPara
		$copiaOcultaPara
		$assunto
		$mensagem	
	*/

	function passarEmail($remetente, $destinatario, $respostaPara, $assunto, $mensagem, $copiaPara = NULL, $copiaOcultaPara = NULL) {
		//carregar arquivos
		require_once "funcoesConfigurarAssuntoDoEmail.php";
		require_once "funcoesConfigurarHeaders.php";
		require_once "funcoesConfigurarMensagemDoEmail.php";

		//configurar elementos	
		$mensagem = configurarMensagem($mensagem);
		$assunto = configurarAssunto($assunto);
		$headers = configurarCabecalhos($remetente, $respostaPara, $copiaPara, $copiaOcultaPara);

		//passar email
		$statusDoEnvioDoEmail = mail($destinatario, $assunto, $mensagem, $headers);

		//finalizar variáveis e retornar status do envio
		return $statusDoEnvioDoEmail;	
	}
?>	