<?php
namespace Router;
{
	class Router
	{
		protected $name = ['Ivan', 'Petrov'];
		
		public function run($name)
		{
			var_export($name);
		}
	}
}
$router = new Router;
echo var_export($router);