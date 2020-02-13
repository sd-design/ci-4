<?php namespace App\Controllers;
use App\Models\Funs;
use App\Models\Orders;

class Calls extends BaseController
{

	public function index()
	{
		return view('welcome_message');
	}

	public function Fun(){
		$fun = new Funs;
		return $fun;
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

	public function list()
	{
		/*
$db = \Config\Database::connect();
 $query = $db->query('SELECT ID, name, phone, order_email FROM sd_order');
$output = $query->getResult();
*/
$parser = \Config\Services::parser();
$order = new Orders();
$records = $order->get_list_orders_html();
//var_dump($records);exit();
$data['hello'] = 'Hello';
$data['list_orders'] =$records->getResultArray();
return $parser->setData($data)
             ->render('calls_template');
	}

public function redirect($user){
		return redirect()->to('/');
		$funs = new Funs;
		if($user === "alex"){
$funs->go_home();
		}

	}
public function enviroment(){
    echo $_SERVER['CI_ENVIRONMENT'];
}


	//--------------------------------------------------------------------

}
