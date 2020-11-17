<?php
	
	/**
		* ExibeMemoriaUsada() Apresenta a quantidade de memória usada para apresentar a página ao usuário
		* @author Charles Corrêa <charlescorreaweb@gmail.com>
		* @version 0.1
		* @param = Nenhum parametro é necessário informar
		* @return = String retorna mensagem gravada no array de dicas
		* @copyright Copyright © 2014, Charles Corrêa - Soluções Web & SMS Marketing.
	*/
	
	function ExibeMemoriaUsada() {
		
		$MemoriaUsada = memory_get_usage(true);
		/*
			
			echo memory_get_usage(); //Resultado: 122120
			
			Obs.: Esta função mostra a quantidade de me memória alocada para este script,
			porém podemos usar o parâmetro TRUE para que a função retorne a
			quantidade total usada no script. O comando ficaria assim:
			memory_get_usage(TRUE).
			
			O valor retornado pode ser diferente em alguns servidores, pois isso irá
			dependerá do sistema usado.
			*
		*/
		if ($MemoriaUsada < 1024) {
			$ExibirMemoriaUsada = $MemoriaUsada . " Bytes";
			} elseif ($MemoriaUsada < 1048576) {
			$ExibirMemoriaUsada = round($MemoriaUsada / 1024, 2) . " KB";
			} else {
			$ExibirMemoriaUsada = round($MemoriaUsada / 1048576, 2) . " MB";
		}
		return $ExibirMemoriaUsada;
	}
	
	
	
?>