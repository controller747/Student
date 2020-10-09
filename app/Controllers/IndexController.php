<?php

namespace App\Controllers;

use Core\Controller;

class IndexController extends Controller
{
	public function indexAction()
	{
		$this->generate('/social/Index');
	}
	public function aboutAction()
	{
		$this->generate('/social/About');
	}
	public function registrationAction()
	{
		$this->generate('/social/Registration');
	}
	public function contactAction()
	{
		$this->generate('/social/Contact');
	}
	public function priceAction()
	{
		$this->generate('/social/Price');
	}
	public function documentsAction()
	{
		$this->generate('/social/Documents');
	}
}

	