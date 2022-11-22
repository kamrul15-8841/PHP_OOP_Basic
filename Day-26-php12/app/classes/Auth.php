<?php


namespace App\classes;


class Auth
{
    private $email = 'k@gmail.com';
    private $password = 'k@gmail.com';

    private $userEmail;
    private $userPassword;

    public function __construct($post)
    {
        $this->userEmail = $post['email'];
        $this->userPassword = $post['password'];
    }

    public function login()
    {
        if ($this->userEmail == $this->email && $this->userPassword == $this->password)
        {
            header('Location: action.php?page=add-product');
//            echo '<pre>';
//            print_r($this->userEmail. $this->userPassword);
        }
        else
        {
            return 'Email or Password is invalid';
        }
    }
}