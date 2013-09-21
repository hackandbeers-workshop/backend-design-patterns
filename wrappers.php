<?php

class VendorClass
{
    public function someMethod()
    {
        // Magic stuff
    }
}

class Wrapper
{
    public function __construct()
    {
        $this->vendorClass = new VendorClass();
    }

    public function anyGivenMethod()
    {
        $result = $this->vendorClass->someMethod();
        // More processing //
        return $result;
    }
}

// Another example //
class MySQLAdapter // Like mysqli
{
    public function connect(){ /* Mysql api connect logic*/ }
    public function executeQuery($query) { /* Mysql api interaction */}
}
