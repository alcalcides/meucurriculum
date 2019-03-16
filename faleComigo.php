<!DOCTYPE html>
<html lang="pt-BR">
	<head>
<!--    	
		<script>
		    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		    ga('create', 'UA-67772141-1', 'auto');
		    ga('send', 'pageview');
		</script>
-->
		<title>Fale comigo - Alcides Augusto CV</title>
		<meta charset="UTF-8">
		<meta name="description" content="Passe um email para Alcides Augusto para o contratar, sugerir contratações, parcerias ou mesmo para críticas.">
		<meta name="author" content="Alcides Augusto Bezerra Neto">
		<meta name="robots" content="noindex, follow">
		<link rel="icon" href="_images/favicon.ico">
		<script src="_javascript/scriptsGerais.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="_css/estiloResponsivo.css">
		<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	</head>
	<body>
		<div id="interfaceCompleta">
			<header id="cabecalho">
				<h1>Alcides Augusto Bezerra Neto</h1>
				<h2 class="borda">Fale Comigo</h2>
			</header>
			<section class="corpo">
				<article>
					<h3>Passe um email para Alcides Augusto</h3>	
					<p>Todo email será respondido individualmente porque <span class="destacar">seu contato é precioso.</span></p>
					<div class="row">
						<form method="get" action="_modulos/configurarEmailFaleComigo.php">
							<fieldset>
								<legend>Dados do Remetente</legend>
								<p>
									<span class="nomeDeCampo">
										<label for="idNomeRemetente">Nome: </label>
									</span>
									<input type="text" name="nNomeRemetente" id="idNomeRemetente" title="Digite seu nome - Campo facultativo" placeholder="Seu nome" maxlength="100"></input>
								</p>
								<p>
									<span class="nomeDeCampo">
										<label for="idEmail">Email: </label>
									</span>
									<input type="email" name="nEmail" id="idEmail" title="Digite seu melhor email" placeholder="Seu email" maxlength="60" required></input>
								</p>
							</fieldset>
							<p>
								<span class="nomeDeCampo">
									<label for="idAssunto">Assunto: </label>
								</span>
								<input type="text" name="nAssunto" id="idAssunto" title="Digite o motivo principal de seu contato" placeholder="O principal motivo de seu contato" maxlength="48" required></input>
							</p>
							<p>
								<span class="nomeDeCampo">
									<label for="idMensagem">Mensagem: </label>
								</span>
								<textarea onkeyup="contarRestantes(this.value, this.maxLength,'caracteresRestantes');" name="nMensagem" id="idMensagem" maxlength="500"required></textarea>
								<span id="caracteresDaMensagem">Faltam <span id="caracteresRestantes"></span> caracteres</span>
							</p>	
							<button type="reset" name="nResetar" title="Limpar formulário">Limpar</button>
							<input type="submit" value="Enviar" id="idSubmeter" name="nSubmeter" title="Enviar agora"></input>
						</form>
					</div>	
				</article>
			</section>
			<footer id="rodape" class="borda bordaDireita">
				<nav>
					<a class="linkDiscreto" href="index.html" title="Visualizar curriculum">Curriculum</a>
				</nav>	
				<p>&copy;
					<a href="https://br.linkedin.com/in/alcalcides" id="contatoDesigner" target="_blank" title="Linkedin"/>Alcides Augusto Bezerra Neto</a>
				</p>
			</footer>
		</div>
	</body>
</html>