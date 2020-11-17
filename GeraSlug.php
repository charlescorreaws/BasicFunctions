<?php
	/*
		* GeraSlug() Gera URL's e nomes de usuários amigaveis para Web  
		* @author Charles Corrêa <charlescorreaweb@gmail.com>
		* @version 0.1
		* @param = (String) Text
		* @return = String
		* @copyright Copyright © 2016, Charles Corrêa - Soluções Web & SMS Marketing.
	*/
	function GeraSlug($String) {
		#Removendo os caracters especiais
		$String = str_replace(".", "", $String);
		$String = str_replace("/", "", $String);
		$String = str_replace("\\", "", $String);
		$String = str_replace(":", "", $String);
		$String = str_replace("(", "", $String);
		$String = str_replace(")", "", $String);
		$String = str_replace("[", "", $String);
		$String = str_replace("]", "", $String);
		$String = str_replace("{", "", $String);
		$String = str_replace("}", "", $String);
		$String = str_replace("*", "", $String);
		$String = str_replace("%", "", $String);
		$String = str_replace("$", "", $String);
		$String = str_replace("#", "", $String);
		$String = str_replace("@", "", $String);
		$String = str_replace("?", "", $String);
		$String = str_replace("!", "", $String);
		$String = str_replace(",", "", $String);
		$String = str_replace("&", "", $String);
		$String = str_replace(";", "", $String);
		#transformando espaços em hífens
		$String = str_replace(" ", "-", $String);
		$String = str_replace("_", "-", $String);
		#remontando as palavras sem a acentuação
		#agudo
		$String = str_replace("&aacute;", "a", $String);
		$String = str_replace("&eacute;", "e", $String);
		$String = str_replace("&iacute;", "i", $String);
		$String = str_replace("&oacute;", "o", $String);
		$String = str_replace("&uacute;", "u", $String);
		$String = str_replace("á", "a", $String);
		$String = str_replace("é", "e", $String);
		$String = str_replace("í", "i", $String);
		$String = str_replace("ó", "o", $String);
		$String = str_replace("ú", "u", $String);
		#circunflexo    
		$String = str_replace("â", "a", $String);
		$String = str_replace("ê", "e", $String);
		$String = str_replace("î", "i", $String);
		$String = str_replace("ô", "o", $String);
		$String = str_replace("û", "o", $String);
		#til    
		$String = str_replace("ã", "a", $String);
		$String = str_replace("õ", "o", $String);
		$String = str_replace("ñ", "n", $String);
		#grave    
		$String = str_replace("à", "a", $String);
		$String = str_replace("è", "e", $String);
		$String = str_replace("ì", "i", $String);
		$String = str_replace("ò", "o", $String);
		$String = str_replace("ù", "u", $String);
		#cedilha
		$String = str_replace("ç", "c", $String);
		#trema    
		$String = str_replace("ä", "a", $String);
		$String = str_replace("ë", "e", $String);
		$String = str_replace("ï", "i", $String);
		$String = str_replace("ö", "o", $String);
		$String = str_replace("ü", "u", $String);
		
		$String = str_replace('Á', 'A', $String);
		$String = str_replace('À', 'A', $String);
		$String = str_replace('Ã', 'A', $String);
		$String = str_replace('Â', 'A', $String);
		$String = str_replace('È', 'E', $String);
		$String = str_replace('É', 'E', $String);
		$String = str_replace('Ê', 'E', $String);
		$String = str_replace('Í', 'I', $String);
		$String = str_replace('Ì', 'I', $String);
		$String = str_replace('Î', 'I', $String);
		$String = str_replace('Ó', 'O', $String);
		$String = str_replace('Ò', 'O', $String);
		$String = str_replace('Õ', 'O', $String);
		$String = str_replace('Ô', 'O', $String);
		$String = str_replace('Ú', 'U', $String);
		$String = str_replace('Ù', 'U', $String);
		$String = str_replace('Û', 'U', $String);
		$String = str_replace('á', 'a', $String);
		$String = str_replace('à', 'a', $String);
		$String = str_replace('ã', 'a', $String);
		$String = str_replace('â', 'a', $String);
		$String = str_replace('é', 'e', $String);
		$String = str_replace('è', 'e', $String);
		$String = str_replace('ê', 'e', $String);
		$String = str_replace('ì', 'i', $String);
		$String = str_replace('í', 'i', $String);
		$String = str_replace('î', 'i', $String);
		$String = str_replace('ó', 'o', $String);
		$String = str_replace('ò', 'o', $String);
		$String = str_replace('õ', 'o', $String);
		$String = str_replace('ô', 'o', $String);
		$String = str_replace('ú', 'u', $String);
		$String = str_replace('ù', 'u', $String);
		$String = str_replace('û', 'u', $String);
		$String = str_replace('ç', 'c', $String);
		$String = str_replace('Ç', 'C', $String);
		
		$String = strtolower(trim($String));
		$String = preg_replace('/[^a-z0-9-]/', '-', $String);
		$String = preg_replace('/-+/', "-", $String);
		return $String;
	}
	
	
?>