<?php 
namespace App\Controllers;
use App\Models\Funs;
use App\Models\Orders;
use CodeIgniter\Controller;


class Blog extends Controller
{

	public function index()
	{
		return view('welcome_message');
	}

	public function Fun(){
		$fun = new Funs;
		return $fun;
	}

	public function hello()
	{
		$say = "hello new CI4";
		
$output = array('answer' => $this->Fun()->say($say));

return $this->response->setJSON($output);

	}
	public function hello2()
	{
$hello = new Funs;
//echo $hello->sayHello() ;
$output = array('answer' => $hello->sayHello());
return $this->response->setJSON($output);

	}

	public function list_orders()
	{
		/*
$db = \Config\Database::connect();
 $query = $db->query('SELECT ID, name, phone, order_email FROM sd_order');
$output = $query->getResult();
*/
$orders = new Orders();
$output = $orders->get_list_orders();
return $this->response->setJSON($output);

	}


	//--------------------------------------------------------------------

}
