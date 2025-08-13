<?php 

/**
*
*/


define('ROOT_PATH', dirname(__DIR__));
class Page_mainController extends Controllers_Abstract
{
	public $template;

	public $botonactivo ;
	public $len;
	

	public function init()
	{
		// Usar la misma lógica de idioma que en bootstrap.php
		$lang_selected = 'es';
		
		// Verificar si se está cambiando el idioma
		if(isset($_GET['lang'])){
			$lang_selected = $_GET['lang'];
		} else if (isset($_COOKIE['user_lang'])) {
			$lang_selected = $_COOKIE['user_lang'];
		}
		
		$this->len = require '../vendor/langs/' . $lang_selected . '.php';
		$this->setLayout('page_page');
		$this->_view->botonactivo = $this->botonactivo;
		$this->_view->len = $this->len;
		$this->template = new Page_Model_Template_Template($this->_view);
		

		
		$this->_view->infopage = $informacion;
		
		

		$this->getLayout()->setData("meta_description","$informacion->info_pagina_descripcion");
		$this->getLayout()->setData("meta_keywords","$informacion->info_pagina_tags");
		$this->getLayout()->setData("scripts","$informacion->info_pagina_scripts");
		

		$header = $this->_view->getRoutPHP('modules/page/Views/partials/header.php');
		$this->getLayout()->setData("header",$header);
		
		$footer = $this->_view->getRoutPHP('modules/page/Views/partials/footer.php');
		$this->getLayout()->setData("footer",$footer);
		$adicionales = $this->_view->getRoutPHP('modules/page/Views/partials/adicionales.php');
		$this->getLayout()->setData("adicionales",$adicionales);
		// $this->usuario();

	}


	// public function usuario(){
	// 	$userModel = new Core_Model_DbTable_User();
	// 	$user = $userModel->getById(Session::getInstance()->get("kt_login_id"));
	// 	if($user->user_id == 1){
	// 		$this->editarpage = 1;
	// 	}
	// }

} 