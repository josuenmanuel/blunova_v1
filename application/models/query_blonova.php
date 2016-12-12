<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Query_blonova extends CI_Model {

	function __construct()
    {        
        parent::__construct();
    }

	function listar_categorias(){
		$datos=$this->db->query('select * from category;')->result_array();
		return $datos;
	}
	function listar_productos(){
		$datos=$this->db->query('select product.idproduct as idproduct, product.name as product_name, product.description as description, product.price as price, product.discount as discount, product.discount_percentage as discount_percentage, product.discount_price as discount_price, product.sale as sale, category.idcategory as idcategory, category.name as category_name, image.name as image_name from product inner join category on product.idcategory=category.idcategory inner join image on image.idproduct=product.idproduct where image.main=1;')->result_array();
		return $datos;
	}
	function datos_producto($id){
		$datos=$this->db->query('select product.idproduct as idproduct, product.name as product_name, product.description as description, product.price as price, product.discount as discount, product.discount_percentage as discount_percentage, product.discount_price as discount_price, product.sale as sale, product.size as size, product.color as color, product.fabric as fabric, product.warranty as warranty, category.idcategory as idcategory, category.name as category_name from product inner join category on product.idcategory=category.idcategory where product.idproduct=?;',$id)->result_array();
		return $datos;
	}
	function imagenes_producto($id){
		$datos=$this->db->query('select * from image where idproduct=?;',$id)->result_array();
		return $datos;
	}
}
?>