<?php 
/**
* clase que genera la insercion y edicion  de Blog en la base de datos
*/
class Administracion_Model_DbTable_Blog extends Db_Table
{
	/**
	 * [ nombre de la tabla actual]
	 * @var string
	 */
	protected $_name = 'blogs';

	/**
	 * [ identificador de la tabla actual en la base de datos]
	 * @var string
	 */
	protected $_id = 'blog_id';

	/**
	 * insert recibe la informacion de un Blog y la inserta en la base de datos
	 * @param  array Array array con la informacion con la cual se va a realizar la insercion en la base de datos
	 * @return integer      identificador del  registro que se inserto
	 */
	public function insert($data){
		$blog_titulo = $data['blog_titulo'];
		$blog_fecha = $data['blog_fecha'];
		$blog_portada = $data['blog_portada'];
		$blog_descripcion = $data['blog_descripcion'];
		$query = "INSERT INTO blogs( blog_titulo, blog_fecha, blog_portada, blog_descripcion) VALUES ( '$blog_titulo', '$blog_fecha', '$blog_portada', '$blog_descripcion')";
		$res = $this->_conn->query($query);
        return mysqli_insert_id($this->_conn->getConnection());
	}

	/**
	 * update Recibe la informacion de un Blog  y actualiza la informacion en la base de datos
	 * @param  array Array Array con la informacion con la cual se va a realizar la actualizacion en la base de datos
	 * @param  integer    identificador al cual se le va a realizar la actualizacion
	 * @return void
	 */
	public function update($data,$id){
		
		$blog_titulo = $data['blog_titulo'];
		$blog_fecha = $data['blog_fecha'];
		$blog_portada = $data['blog_portada'];
		$blog_descripcion = $data['blog_descripcion'];
		$query = "UPDATE blogs SET  blog_titulo = '$blog_titulo', blog_fecha = '$blog_fecha', blog_portada = '$blog_portada', blog_descripcion = '$blog_descripcion' WHERE blog_id = '".$id."'";
		$res = $this->_conn->query($query);
	}
}