<?php

namespace App\Controllers;
use Config\Services;

class Home extends BaseController
{
	public function index()
	{
		echo Services::getSecreteKey();
		die;
		return view('welcome_message');
	}
}
