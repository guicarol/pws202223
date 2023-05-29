<?php

class Auth
{
    public function __construct(){
        session_start();
    }

    public function CheckAuth($username, $password){
        if ($username=='Samuel' && $password=='1234'){
            $_SESSION['username'] = $username;
            return true;
        }
        else{
            return false;
        }
    }

    function isLoggedIn()
    {
        if( isset( $_SESSION['username'] ) )
        {return true;}
        else
        {return false;}
    }

    function logout(){
        session_destroy();
    }


}