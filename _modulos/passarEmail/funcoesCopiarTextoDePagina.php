<?php
//Carregado em passarEmail.php
	function abrirArquivo ($caminho, $modo) {
		$arquivo = fopen($caminho, $modo);//Necessário ativar acesso de arquivos http, ssl etc
		if (!$arquivo) {
			exit(2);
			echo "Impossível abir URL especificada";
		}
		return $arquivo;		
	}

	function fecharArquivo (&$caminho) {
		if( fflush($caminho) && fclose($caminho) ){
			return true;
		}
		else return false;
	}

	function copiarArquivoParaString ($arquivo) {
		$string = "";
		while (!feof($arquivo)) {
			$string = $string . fgets($arquivo) ;//fgets é binary-safe, isto é, garante o tratamento de objetos
		}
		return $string;
	}

	function copiarPaginaCujaUrlEstaEscrita ($caminhoDoArquivoComUrl) {
		//carrega definições
		require_once "padroes.php";

		//abrir o arquivo
		$arquivo = abrirArquivo($caminhoDoArquivoComUrl,"rt");
		
		//copiar a url da primeira linha
		fscanf($arquivo, "%[^\n]",$url);
		
		//abrir arquivo da url
		$paginaParaCopiar = abrirArquivo($url, "r");

		//copiar dados do arquivo url indicado
		$dados = copiarArquivoParaString($paginaParaCopiar);
		
		//guardar uma cópia da mensagem enviada no arquivo ultimaMensagemEnviada, definido em padroes.php
		$tamanhoDaPaginaCopiada = file_put_contents(ultimaMensagemEnviada, $dados);
		
		//finalizar
		fecharArquivo($arquivo);
		fecharArquivo($paginaParaCopiar);
		return $dados;
	}

	function copiarUrl($url) {
		//carrega definições
		require_once "padroes.php";
		
		//abrir arquivo da url
		$paginaParaCopiar = abrirArquivo($url, "r");

		//copiar dados do arquivo url indicado
		$dados = copiarArquivoParaString($paginaParaCopiar);
		
		//guardar uma cópia da mensagem enviada no arquivo ultimaMensagemEnviada, definido em padroes.php
		$tamanhoDaPaginaCopiada = file_put_contents(ultimaMensagemEnviada, $dados);
		
		//finalizar
		fecharArquivo($paginaParaCopiar);
		return $dados;
	}

	function verificarSerUrl($texto) {
		//Concentrar-se na primeira linha
		$primeiraLinha = stristr($texto, "\n", true);
		//verificar se começa com a expressão "url: "
		$urlOuNao = stripos($primeiraLinha, "url: ");
		//Verifica se não é url. Se não houver "url: " o retorno de stripos é false. Se houver, mas não for os primeiros caracteres, o retorno é diferente de 0.
		if($urlOuNao === false || ($urlOuNao != 0) ) {
			$resposta = false;
		}
		else {
			$resposta = true;
		}
		return $resposta;
	}

	function extrairUrl($texto) {
		$url = substr($texto, 5);
		return $url;
	}

	function copiarPaginaInterna ($caminhoDoArquivoInterno) {
		//carrega definições
		require_once "padroes.php";

		//abrir arquivo
		$arquivo = abrirArquivo($caminhoDoArquivoInterno,"rt");

		//copiar dados do arquivo para uma string
		$string = copiarArquivoParaString($arquivo);

		//guardar uma cópia da mensagem enviada no arquivo ultimaMensagemEnviada, definido em padroes.php
		$tamanhoDaPaginaCopiada = file_put_contents(ultimaMensagemEnviada, $string);

		//finalizar variáveis
		fecharArquivo($arquivo);

		//retornar string	
		return $string;
	}
?>