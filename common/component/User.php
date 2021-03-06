<?php

namespace common\component;

class User
{

    protected $username;

    protected $password;


    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function checkPassword($currentPassword)
    {
        return ($currentPassword == $this->getPassword());
    }

    public function getJsonData()
    {
        return json_encode(['username'=>$this->getUsername(), 'password'=> $this->getPassword()]);
    }
}
