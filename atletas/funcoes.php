<?php
	
	require_once('../config.php');
	require_once(DBAPI);
	
	$atletas = null;
	$atleta = null;
	
	/**
	 *  Listagem de Atletas
	 */
	function index() {
		global $atletas;
		$atletas = find_all('atletas');
	}
