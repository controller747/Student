<?php
namespace Core;

use Core\Controller;
/**
 * Base controller
 */
class Controller
{
    public function generate(string $viewName, array $param = [])
    {
        View::generate($viewName, $param);
    }
}
