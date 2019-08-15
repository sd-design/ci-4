<?php namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
	public function index()
	{
		$data['public_folder'] = FCPATH;
		return view('welcome_message', $data);
	}

	//--------------------------------------------------------------------

}
