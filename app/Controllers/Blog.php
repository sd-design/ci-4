<?php namespace App\Controllers;
use App\Models\Funs;
use App\Models\Orders;

class Blog extends BaseController
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
             ->render('blog_template');
	}
	public function list_html()
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
return view('list_view', $data);
	}

public function array(){
	//$array1 = array('home.jpg', 'home2223.jpg' , '555right.jpg');
	$directory =$_SERVER['DOCUMENT_ROOT'].'/img/'; 
$scanned_directory = array_diff(scandir($directory), array('..', '.'));
$folder =  '/yum_foto/2019/Golos/';
$event_name = 'Youth service Golos';
array_walk($scanned_directory, function(&$value,  $key) use ($folder , $event_name) { $value = array('event_name' => $event_name , 'link' => $folder .$value); } );
	//var_dump($array1);
	return $this->response->setJSON($scanned_directory);
}




	//--------------------------------------------------------------------

}
