<?php

namespace App\Controllers;

use Core\Controller;

class LoosController extends Controller
{
	public function indexAction()
	{   
     $this->generate('/404');  
	}
}                             