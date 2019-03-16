function alertar(mensagem) {
	window.alert(mensagem);
}

function redirecionar(url){
	location.href=url;
}

function voltarPagina(quantidadeDePaginasAVoltar) {
	quantidadeDePaginasAVoltar *= (-1);
	window.history.go(quantidadeDePaginasAVoltar);
}

function avancarPargina(quantidadeDePaginasAAvancar) {
	window.history.go(quantidadeDePaginasAAvancar);
}

function limparCampo(idDoCampo) {
	document.getElementById(idDoCampo).value="";
}

function contarRestantes(campoContado, limite,campoAExibir) {
	var escrito = campoContado.length;
	document.getElementById(campoAExibir).innerHTML = limite - escrito;
}

function manipularFoto(idResultado, idControlador) {
			//Esta segunda verificação do if resolve o fato de display = none ter valor indefinido ou nulo
			//O caractere | usado no if abaixo significa "ou". A diferença para || é a não avaliação do segundo termo quando o primeiro já define o resultado, isto é, o primeiro é true.
			if(document.getElementById(idResultado).style.display == 'none' | !document.getElementById(idResultado).style.display ){
				document.getElementById(idResultado).style.display = 'block';
				document.getElementById(idControlador).src="_images/fotoTachada.jpg";
			}
			else{
				document.getElementById(idResultado).style.display = 'none';
				document.getElementById(idControlador).src="_images/foto.jpg";
			}
		}