<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<title>Fale com Alcides Augusto</title>
		<script src="../_javascript/scriptsGerais.js"></script>
	</head>
	<body>
		<?php
			require_once 'passarEmail/funcaoPassarEmail.php';

			//remetente
			$remetente = $_REQUEST['nEmail'];	
			//destinatário
			$destinatario = "alcalcides@hotmail.com";
			//resposta para
			$respostaPara = $_REQUEST['nEmail'];
			//copia para
			$copiaPara = "alcides@alcides.pe.hu";
			//copia oculta para
			//assunto
			$assunto = "[pe.hu]" . $_REQUEST['nAssunto'];
			//mensagem
			$mensagem = $_REQUEST['nMensagem'];
			if ($_REQUEST['nNomeRemetente'] != NULL) {
				$mensagem = "Remetente: " . $_REQUEST['nNomeRemetente'] . "<br>" . "Mensagem: <hr>" . $mensagem;
			}

			//chamar função passarEmail.php
			$envio = passarEmail($remetente, $destinatario, $respostaPara, $assunto, $mensagem, $copiaPara);
			//redirecionar usuário
			//enviado com sucesso:
			if ($envio) {
				echo '<script>alertar("Mensagem Enviada!");</script>';
				echo '<script>redirecionar("../index.html");</script>';
			}
			//erro de envio
			else {
				echo '<script>alertar("Mensagem Não Enviada! Tente mais tarde.");</script>';
				//Recarregar página
				echo '<script>voltarPagina(1);</script>';
				
			}
		?>
	</body>
</html>
