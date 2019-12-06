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


    /**
	 *  Cadastro de Atletas
	 */
	function add() {
	
        if (!empty($_POST['atleta'])) {
          
          $today = 
            date_create('now', new DateTimeZone('America/Sao_Paulo'));
      
          $atleta = $_POST['atleta'];
          $atleta['modificado'] = $atleta['criado'] = $today->format("Y-m-d H:i:s");
          
          save('atletas', $atleta);
          header('location: index.php');
        }
      }
  

      /**
	 *	Atualizacao/Edicao de Atleta
	 */
	function edit() {
	
        $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
      
        if (isset($_GET['id'])) {
      
          $id = $_GET['id'];
      
          if (isset($_POST['atleta'])) {
      
            $atleta = $_POST['atleta'];
            $atleta['modificado'] = $now->format("Y-m-d H:i:s");
      
            update('atletas', $id, $atleta);
            header('location: index.php');
          } else {
      
            global $atleta;
            $atleta = find('atletas', $id);
          } 
        } else {
          header('location: index.php');
        }
      }
  

      /**
	 *  Visualização de um atleta
	 */
	function view($id = null) {
        global $atleta;
        $atleta = find('atletas', $id);
      }
  