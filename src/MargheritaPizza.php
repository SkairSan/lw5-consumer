<?php

namespace PizzaStoreConsumer;

use PizzaStoreLib\Pizza;

class MargheritaPizza extends Pizza
{
    public function __construct()
    {
        parent::__construct(
            'Margherita',
            'Tomato',
            ['Mozzarella', 'Basil', 'Olive oil']
        );
    }
}
