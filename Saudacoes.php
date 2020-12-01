<?php
	
/**
 * Saudacao() Exibe saudações de bom dia, boa tarde ou boa noite ao usuário dependendo da hora acessada
 * @author Charles Corrêa <charlescorreaweb@gmail.com>
 * @version 0.1
 * @param Nenhum
 * @return String
 */
 
function Saudacao() {
    $hr = date("H");
    if ($hr >= 12 && $hr < 18) {
        $Saudacao = "Boa tarde!";
    } else if ($hr >= 0 && $hr < 12) {
        $Saudacao = "Bom dia!";
    } else {
        $Saudacao = "Boa noite!";
    }
    return $Saudacao;
}

?>