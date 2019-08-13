<?php 
namespace App\Models;
use CodeIgniter\Model;

    class Orders extends Model
    {
  public function get_list_orders(){
  	$db      = \Config\Database::connect();
$builder = $db->table('sd_order');
$builder->orderBy('ID', 'DESC');
 $query   = $builder->get(); 
  	return  $query->getResult();
  	
}
 	

            
    }