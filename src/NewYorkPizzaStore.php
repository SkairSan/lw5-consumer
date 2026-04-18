<?php

namespace PizzaStoreConsumer;

use PizzaStoreLib\PizzaStore;
use PizzaStoreLib\Pizza;

class NewYorkPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        return match ($type) {
            'margherita' => new MargheritaPizza(),
            'pipperoni' => new PipperoniPizza(),
            'veggie' => new VeggiePizza(),
            default => throw new \InvalidArgumentException("Unknown pizza type: {$type}")
        };
    }
}
