<?php
/**
 * FactoryMethod exercise.
 *
 * @group inactive
 */
class StrategyTest extends PHPUnit_Framework_TestCase
{
    public function test_user_can_be_serialized_in_json()
    {
        $expectedJsonUser = "{name: 'mark', age: 29}";
        $user = new User();
        $user->setName('mark');
        $user->setAge(29);
        $user->setSerializationStrategy(new JsonStrategy());

        $this->assertEquals($expectedJsonUser, $user->serialize());
    }

    public function test_user_can_be_serialized_as_array()
    {
        $expectedArrayUser = array('name' => 'mark', 'age' => 29);
        $user = new User();
        $user->setName('mark');
        $user->setAge(29);
        $user->setSerializationStrategy(new ArrayStrategy());

        $this->assertEquals($expectedArrayUser, $user->serialize());
    }
}