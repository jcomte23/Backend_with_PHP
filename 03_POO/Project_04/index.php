<?php

class Users
{
    public $name;

    public function __construct($_name)
    {
        $this->name = $_name;
    }

    final public function getName()
    {
        return $this->name;
    }
}

class Admin extends Users
{
    //...
}

$admin=new Admin("marcos");
echo $admin->getName();
