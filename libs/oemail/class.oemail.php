<?php

/*
 * Classe para validação de e-mail
 * Copyright (c) Sebastião Farias Júnior 2002
 * Belém/PA
 * E-mail: overond@yahoo.com
 * Licença GNU
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
 * Função que verifica se o e-mail é valido ou não
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
