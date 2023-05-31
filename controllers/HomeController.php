<?php
require_once 'Controller.php';

class HomeController extends Controller
{
    public function index()
    {
        $auth = new Auth();
        $user = $auth ->getUser();
        $this->renderView('home', 'index',['user'=>$user]);
    }

}