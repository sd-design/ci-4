<?php 
namespace App\Controllers;
use App\Models\Funs;
use CodeIgniter\Controller;


class Blog extends Controller
{
	public function index()
	{
		return view('welcome_message');
	}

	public function hello()
	{
$output = array('answer' => 'hello');

return $this->response->setJSON($output);

	}
	public function hello2()
	{
$hello = new sayHello();
var_dump($hello) ;
//$output = array('answer' => );
//return $this->response->setJSON($output);

	}


	//--------------------------------------------------------------------

}
