<?php

class Auth
{


    public function __construct()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    public function checkAuth($username, $password)
    {
        $user = User::find_by_username_and_password($username, $password);
        if ($user) {
            $_SESSION['id'] = $user->id;
            return true;
        } else {
            return false;
        }
    }

    public function isLoggedIn()
    {
        if (isset($_SESSION['id'])) {
            return true;
        } else {
            return false;
        }
    }

    function logout()
    {
        session_destroy();
    }

    public function getUser()
    {
        $user = User::find($_SESSION['id']);
        return $user;
    }

    public function getRole()
    {
        $user = User::find($_SESSION['id']);

        return $user->role;
    }

    public function isLoggedInAs($roles = [])
    {
        if ($this->isLoggedIn()) {
            $role = $this->getRole();
            return in_array($role, $roles);
        }
    }
}
