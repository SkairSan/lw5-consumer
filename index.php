<?php

require __DIR__ . '/vendor/autoload.php';

use PizzaStoreConsumer\NewYorkPizzaStore;

$store = new NewYorkPizzaStore();
$store->orderPizza('margherita');
$store->orderPizza('pipperoni');
$store->orderPizza('veggie');
