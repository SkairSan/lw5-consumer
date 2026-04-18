<?php

namespace PizzaStoreConsumer;

use PizzaStoreLib\Pizza;

class PipperoniPizza extends Pizza
{
    public function __construct()
    {
        parent::__construct(
            'Pipperoni',
            'Tomato',
            ['Pipperoni', 'Mozzarella', 'Oregano']
        );
    }
}
