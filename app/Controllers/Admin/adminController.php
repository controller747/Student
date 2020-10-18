<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use Core\Db\Connecter;

class adminController extends Controller
{
    public function actionIndex()
    {
        $this-connectDatabase();
        
    }
    public function connectDatabase()
    {
        $dbconnecter = new Connecter();
        $dbconnecter-connectDB();
        $temp = $dbconnecter-connectDB();
        $temp = mysqli_connect('127.0.0.1', 'root', 'root');
        if($temp) {
            echo 'Connect successfulbr';
            var_export($temp);
        } else {
            echo 'Connect failedbr';
        }
    }
}