<?php

class Page_clientesController extends Page_mainController
{
  public $botonactivo = 2;
  public function indexAction()
  {
    $this->_view->banner = $this->template->banner(4);
    $this->_view->seccion = 4;
    $this->_view->contenido = $this->template->getContentseccion(4, 'Clientes');
  }
}
