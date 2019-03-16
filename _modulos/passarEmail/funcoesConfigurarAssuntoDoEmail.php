<?php 
//Carregado em passarEmail.php
//Carregado em funcaoPassarEmail.php
	function configurarAssunto ($subject) {
		//Não pode ter o caractere especial /n nem a tag <br>
		$subject = str_replace("\n", " ", $subject);
		$subject = str_replace("<br>", " ", $subject);
		return $subject;
	}
?>