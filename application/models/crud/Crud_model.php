<?php
/**
* 
*/
class Crud_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

    public function cargar(){
        return $this->db->query("
            SELECT tbl_producto.id, 
                   tbl_producto.codigo,
                   tbl_producto.nombre,
                   tbl_familia.nombre as 'familia',
                   tbl_producto.precio 
                   FROM 
                   tbl_producto,
                   tbl_familia 
                   WHERE(tbl_producto.familia = tbl_familia.id)
                   order by tbl_producto.id desc");
    }

	public function insertar_producto($datos){
		$codigo = $datos['txtcodigo'];
        $nombrep = $datos['txtnombre'];
        $familia = $datos['cbofamilia'];
        $precio = $datos['txtprecio'];
        $sql = "
        INSERT INTO 
        tbl_producto 
        (id,codigo,nombre,familia,precio,estado) 
        VALUES 
        (null,'$codigo','$nombrep',$familia,$precio,1)";
        $this->db->query($sql);
	}

    public function eliminar_producto($id){
        $sql = "DELETE FROM tbl_producto WHERE id = $id";
        $this->db->query($sql);
    }

    public function cargar_familias(){
        return $this->db->query("SELECT * FROM tbl_familia order by id desc");
    }
}

?>