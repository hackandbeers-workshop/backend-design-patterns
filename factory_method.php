<?php

class User
{
    public static function createDefault()
    {
        $user = new static();
        $user->setName('default');
        $user->setAge(0);

        return $user;
    }

    public function __construct($name)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    public function setAge($age){ $this->age = $age; }
    public function setName($name){ $this->name = $name; }
}

User::createDefault(); // creates a user with age 0 and name 'default'

// This approach allows method chaining right away in php.

function doSomething()
{
    return User::createDefault()->setName('whatever');
}