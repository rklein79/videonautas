<?php

class Dados {
 
	// Este atributo guarda uma instância da classe
	private static $instance = null;
	 
	// Atributo que armazenara um texto para realizarmos um teste
	private $XML;
	 
	// Um construtor privado! Isso previne que a
	// criação direta do objeto
	private function __construct() { }
	 
	// O método singleton
	public static function getInstance() {
	 
	if (!isset(self::$instance) && is_null(self::$instance)) {
		$c = __CLASS__;
		self::$instance = new $c;
	}
	 
	return self::$instance;
	 
	}
	 
	public function setXML($XML) {
		$this->XML = $XML;
	}
	 
	public function getXML() {
		return $this->XML;
	}
 
}

?>