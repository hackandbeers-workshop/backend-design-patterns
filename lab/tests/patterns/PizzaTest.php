<?php
/**
 * FactoryMethod exercise.
 *
 * @group inactive
 */
class PizzaTest extends PHPUnit_Framework_TestCase
{
    public function test_hawaiian_pizza_has_right_ingredients()
    {
        $expectedIngredients = array('pineapple', 'ham', 'cheese');

        $pizza = Pizza::createHawaiianPizza();

        $this->assertEquals($expectedIngredients, $pizza->getIngredients());
    }

    public function test_cheese_pizza_has_right_ingredients()
    {
        $expectedIngredients = array('cheese');

        $pizza = Pizza::createCheesePizza();

        $this->assertEquals($expectedIngredients, $pizza->getIngredients());
    }
}