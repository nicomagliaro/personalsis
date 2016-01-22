<?php

/*
 * Classe para valida��o de e-mail
 * Copyright (c) Sebasti�o Farias J�nior 2002
 * Bel�m/PA
 * E-mail: overond@yahoo.com
 * Licen�a GNU
 * Modo de usar:
 * $oEmail = new email;
 * if ($oEmail->valida($str)) {
 * echo "e-mail valido";
 * }
 * else{
 * echo "e-mail invalido";
 * }
 */
class Email
{

/**
 * email::valida()
 * Fun��o que verifica se o e-mail � valido ou n�o
 * @param $str
 * @return 
 */
	function valida($str){
		if (ereg("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)+$", $str)){
			return 1;
 		}
		else {
 			return 0;
 		}
	}
}
?>
