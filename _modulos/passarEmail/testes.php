<!DOCTYPE html>
<html>
	<head>
		<title>Testes</title>
	</head>
	<body>
		<?php  
			require_once 'funcaoPassarEmail.php';
			$remetente = "aabn@cin.ufpe.br";
			$destinatario = "alcides@alcides.pe.hu";
			$respostaPara = "aabn@cin.ufpe.br";
			$copiaPara = null;
			$copiaOcultaPara = null;
			$assunto = "assunto para página de teste";
			$mensagem = "mensagem de página de teste";

			var_dump(passarEmail($remetente, $destinatario, $respostaPara, $assunto, $mensagem, $copiaPara, $copiaOcultaPara));
		?>
	</body>
</html>