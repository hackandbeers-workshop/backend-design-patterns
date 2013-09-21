<?php

/**
 * @group inactive
 */
class SingletonTest extends PHPUnit_Framework_TestCase
{
    public function test_singleton_values_are_modified()
    {
        $expectedValue = 'hello';

        Singleton::getInstance()->setValue('key', 'first value');
        Singleton::getInstance()->setValue('key', $expectedValue);

        $this->assertEquals($expectedValue, Singleton::getInstance()->getValue('key'));
    }
}