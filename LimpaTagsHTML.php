<?php
	
	/**
		* LimpaTagsHTML() retira da string todas as tags html dela
		* @param string $string		
		* @return string
	*/
	
	function LimpaTagsHTML($String) {

    $String = filter_var($String, FILTER_SANITIZE_STRING); //Limpa tags html da string

    return $String;
}

?>