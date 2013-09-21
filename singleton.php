<?php

// Typical example of singleton
class Singleton
{
    private static $instance;
    private function __construct(){}

    public function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone(){}

    public function sayHello()
    {
        echo 'hello world!';
    }
}

Singleton::getInstance()->sayHello(); // Outputs hello world!
$singleton = new Singleton(); // Throws fatal error
