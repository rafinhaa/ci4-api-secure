<?php

namespace App\Controllers;
use Config\Services;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
}
