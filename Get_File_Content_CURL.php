<?php
	
	/*
		* GetFileContent() script criado pra substituir a function php native file_get_contents()
		* @author Charles Corrêa <charlescorreaweb@gmail.com>
		* @version 0.1
		* @param = String
		* @return = string
		* @copyright Copyright © 2020, Charles Corrêa - Soluções Web & SMS Marketing.
	*/


function GetFileContent($URL, $UserAgent) {

      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $URL);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_HEADER, false);
      curl_setopt($curl, CURLOPT_AUTOREFERER, true);
      curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($curl, CURLOPT_ENCODING, 'gzip');
      curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 120);
      curl_setopt($curl, CURLOPT_TIMEOUT, 120);
      curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
      curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);

      $return = curl_exec($curl);
      curl_close($curl);
      
      return $return;
}
?>