<?php

class Auth
{

    public function __construct()
    {
        session_start();

    }

    public function checkAuth($username, $password)
    {
        if ($username == "Admin" && $password == "1234") {
            $_SESSION['username'] = $username;

            return true;
        } else {
            return false;
        }
    }

    public function isLoggedIn()
    {
        if (isset($_SESSION['username'])) {
            return true;
        } else {
            return false;
        }
    }

    function logout()
    {
        session_destroy();
    }
}
