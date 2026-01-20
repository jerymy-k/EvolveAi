<?php

namespace App\Models;




class User
{
    private int $id;
    private string $name;
    private string $username;
    private string $email;
    private string $password;


    public function __construct($id, $name, $username, $email, $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
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
    public function setId($id)
    {
        return $this->id = $id;
    }
    public function setName($name)
    {
        return $this->name = $name;
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
}