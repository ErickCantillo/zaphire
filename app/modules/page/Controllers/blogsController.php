<?php

class Page_blogsController extends Page_mainController
{
  public $botonactivo = 2;
  public function indexAction()
  {
    $this->_view->banner = $this->template->banner(5);
    $this->_view->seccion = 5;
    $this->_view->contenido = $this->template->getContentseccion(5, 'Blog');
    $this->_view->blogs = $this->getBlogs();
  }


  private function getBlogs(){
    $blogModel = new Administracion_Model_DbTable_Blog();
    return $blogModel->getlist();
  }
}
