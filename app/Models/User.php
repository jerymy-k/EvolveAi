<?php

namespace App\Models;




class User
{
    private int $id;
    private string $username;
    private string $email;
    private string $password;
    private string $confirmPassword;

    


    public function __construct($id,$username,$email, $password,$confirmPassword)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;


    }

    public function getId()
    {
        return $this->id;
    }
    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function geconfirmtPassword()
    {
        return $this->confirmPassword;
    }
    public function setId($id)
    {
        return $this->id = $id;
    }
    public function setUsername($username)
    {
        return $this->username = $username;
    }

    public function setEmail($email)
    {
        return $this->email = $email;
    }

    public function setPassword($password)
    {
        return $this->password = $password;
    }
    public function setconfirmPassword($confirmPassword)
    {
        return $this->confirmPassword = $confirmPassword;
    }
}