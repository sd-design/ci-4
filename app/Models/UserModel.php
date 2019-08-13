<?php namespace App\Models;
use Codeigniter\Model;
//use CodeIgniter\Database\ConnectionInterface;

    class UserModel extends Model
    {
  public function get_list(){
$db = \Config\Database::connect();
 $query = $db->query('SELECT ID, name, phone, order_email FROM sd_order');
$results = $query->getResult();
return $result;
}
 	

            
    }