<?php
	class XMLClass{
		

			public function ReadXML($XMLFile){
				#define o encoding do cabeçalho para utf-8
				@header('Content-Type: text/html; charset=utf-8');
				#carrega o arquivo XML e retornando um Array
				try{					$retorno = simplexml_load_file($XMLFile);				}catch(RangeException $e){					return false;				}								return $retorno;
			}
			
		
	}



?>