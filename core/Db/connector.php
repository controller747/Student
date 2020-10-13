<?php

namespace Core\Db\connector;

class Connector
{
	protected $config;
	
	
	public function __construct()
	{
		$this->setConfig();
	}
	 
	public function setConfig():void
	{
		$this->config = include APP_ABSOLUTE_PATH . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'Db.php';
	}
	
	 public function connectDB()
    {
//        if(is_array($this->config) && !empty($this->config)) {
            var_export($this->config);
            echo '<br>';
            extract($this->config);
            var_export($host);
			$connect =  mysqli_connect($host, $user, $password);
            var_export($connect);

    }
	
}