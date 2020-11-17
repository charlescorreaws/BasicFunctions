<?php
	
	/*
		* cUrlGetData() script criado pra substituir a function php native file_get_contents() ou enviar dados para Outra API via POST e capturar o request
		* @author Charles Corrêa <charlescorreaweb@gmail.com>
		* @version 0.1
		* @param = String
		* @return = string
		* @copyright Copyright © 2020, Charles Corrêa - Soluções Web & SMS Marketing.
	*/
	
	
	
	function cUrlGetData($Url_APIREST, $Dados_POST_APIREST = null, $Dados_Header_APIREST = null, $Dados_UserAgent_APIREST = null) {
      
    $ch = curl_init();
    
    $TimeOut = 30;
    
    curl_setopt($ch, CURLOPT_URL, $Url_APIREST);
    
    if ($Dados_POST_APIREST && !empty($Dados_POST_APIREST)) {
          
        curl_setopt($ch, CURLOPT_POST, true);
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($Dados_POST_APIREST));
    }
    
    if ($Dados_Header_APIREST && !empty($Dados_Header_APIREST)) {
          
        curl_setopt($ch, CURLOPT_HTTPHEADER, $Dados_Header_APIREST);
    }
    
    if ($Dados_UserAgent_APIREST && !empty($Dados_UserAgent_APIREST)) {
          
          $Dados_UserAgent_APIREST = $_SERVER['HTTP_USER_AGENT'];        
    }
    
    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    
    curl_setopt($ch, CURLOPT_USERAGENT, $Dados_UserAgent_APIREST);
    
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $TimeOut);
    
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
    
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
    
    //curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept-Language: pt']);
    
    $Resultado = curl_exec($ch);
    
    if (curl_errno($ch)) {
    
    $NumeroErro_cURL = curl_errno($ch);
	$MensagemErro_cURL_Original = curl_error($ch);
	$MensagemErro_cURL = curl_strerror($NumeroErro_cURL);
          
          // Caso tenha algum erro na transferência ou consumo do cURL irá retornar true e exibirá a mensagem abaixo
			
			$Resultado =  "[Erro cURL nº $NumeroErro_cURL] -> $MensagemErro_cURL [$MensagemErro_cURL_Original]";
          
          
    }
    
    curl_close($ch);
    
    return $Resultado;
}

?>