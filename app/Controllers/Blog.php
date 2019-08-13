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


	//--------------------------------------------------------------------

}
