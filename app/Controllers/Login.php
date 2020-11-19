<?php namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		return view('login');
	}
	public function verif()
	{
		$email=$this->request->getVar("email");
		$password=$this->request->getVar("password");
		if ($email=="dapurica@gmail.com" and $password=="dapurica"){
			return redirect()->to('/Home');
		}
		else {
			return redirect()->to('/Login');
		}
	}

	//--------------------------------------------------------------------

}
