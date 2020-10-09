<?php
namespace Core;

use App\Controllers\LoosController;

/**
 * Router
 */
final class Router                                                                                                  
{
	private $routes = [];
	private $httpHost;
	private $requestUri;
	
	public function run()
	{
		//var_export($this->requestUri);
		if (array_key_exists($this->requestUri, $this->routes)) {
			$parser = new ControllerNameParser;
			$checkController = $parser->parse($this->routes[$this->requestUri]);
			if ($checkController) {

				$controller = $parser->getController();
				$contrObj = new $controller();
				$action = $parser->getActionName();
				$contrObj->$action();
			} else {
				throw new \Exception($parser->getErrorMessage());
			}

		} else {
			$loos = new LoosController();
			$loos->indexAction();
		}
	}              

	public function __construct()
	{
		$this->setRoutes();
		$this->setServerParams();
	}
	
	public function setRoutes():void
	{
		$this->routes = include APP_ABSOLUTE_PATH . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'Route.php';
	}
	
	private function setServerParams():void
	{
		$this->httpHost = $_SERVER['HTTP_HOST'];
		$this->requestUri = $_SERVER['REQUEST_URI'];
	}
}

