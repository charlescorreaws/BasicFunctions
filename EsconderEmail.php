<?php
	
	/**
		* EsconderEmail() Codificamos com JS o envio de email para um determinado usuário afim de evitar a probagação de spam
		* Cria o "mailto" link para um endereço de email
		* @param string $Email Endereço de email do usuário
		* @param string $Titulo  Texto que será exibido no link para enviar o email
		* @param string $Assunto Assunto da Mensagem de email
		* @return string
	*/
	function EsconderEmail($Email, $Titulo = null, $Assunto = null) {
		
		$character_set = '+-.0123456789@ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz';
		
		$key = str_shuffle($character_set);
		$cipher_text = '';
		$id = 'e' . rand(1, 999999999);
		
		for ($i = 0; $i < strlen($Email); $i+=1)
        $cipher_text.= $key[strpos($character_set, $Email[$i])];
		
		$script = 'var a="' . $key . '";var b=a.split("").sort().join("");var c="' . $cipher_text . '";var d="";';
		
		$script.= 'for(var e=0;e<c.length;e++)d+=b.charAt(a.indexOf(c.charAt(e)));';
		
		$script.= 'document.getElementById("' . $id . '").innerHTML="<a href=\\"mailto:"+d+"\\">"+d+"</a>"';
		
		$script = "eval(\"" . str_replace(array("\\", '"'), array("\\\\", '\"'), $script) . "\")";
		
		$script = '<script type="text/javascript">/*<![CDATA[*/' . $script . '/*]]>*/</script>';
		
		return '<span id="' . $id . '">[javascript protected email address]</span>' . $script;
	}
	
?>