<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class IndexController extends BaseController
{
    public function index()
    {
        $this->render('index', ['title' => 'Home']);
    }
}