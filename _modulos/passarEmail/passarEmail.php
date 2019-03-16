<?php
	//Esta função passa emails

	//carregar arquivos
	require_once "padroes.php";
	require_once "funcoesCopiarTextoDePagina.php";
	require_once "funcoesConfigurarAssuntoDoEmail.php";
	require_once "funcoesConfigurarMensagemDoEmail.php";
	require_once "funcoesCopiarTextoDePagina.php";
	require_once "funcoesConfigurarHeaders.php";

	//entradas
	$remetente = $_REQUEST['remetente'];
	$destinatario = $_REQUEST['destinatario'];
	$respostaPara = $_REQUEST['responderPara'];
	$copiaPara = $_REQUEST['copiaPara'];
	$copiaOcultaPara = $_REQUEST['copiaOcultaPara'];
	$assunto = $_REQUEST['assunto'];
	$mensagem = copiarPaginaInterna(arquivoComMensagem);//ler do arquivo padrao e retorna uma string.
	//verifica se $mensagem trata-se de uma url a seguir. Retorna true se for, ou false caso contrário.
	$urlOuNao = verificarSerUrl($mensagem);
	//se for url a seguir, modificar $mensagem
	if($urlOuNao){
		//extrair endereço url de $urlOuNao
		$url = extrairUrl($mensagem);
		//copiar a pagina indicada para $mensagem
		$mensagem = copiarUrl($url);
	}

	//configurar elementos
	$mensagem = configurarMensagem($mensagem);//Se urls chegarem muito grandes, é só usar configurarMensagem($mensagem, $urlOuNao);
	$assunto = configurarAssunto($assunto);
	$headers = configurarCabecalhos($remetente, $respostaPara, $copiaPara, $copiaOcultaPara);

	//passar email
	$statusDoEnvioDoEmail = mail($destinatario, $assunto, $mensagem, $headers);
	//finalizar variáveis e retornar status do envio
	return $statusDoEnvioDoEmail;
?>