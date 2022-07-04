<?php
namespace CommandBus;

/**
 * CLI file with basic CommandBus functionality
 * simplified Order, for example:
 * php commandbustest.php createOrder itemName itemPrice orderStatus
 *
 * Copyright (c) 2022 Vlad Madejczyk
 */

require_once 'CommandBus/CommandBus.php';
require_once 'CommandBus/CreateOrder.php';
require_once 'CommandBus/HandleCreateOrder.php';

// Basic validation of command line input.
if($argv[1] == 'createOrder' && count($argv) == 5) {

    $command = new CreateOrder($argv[2], $argv[3], $argv[4]);

    $commandBus = CommandBus::getInstance();
    $commandBus::executeCommand($command);

} else {
    echo 'Correct usage example: ' . "\n"
        . 'php commandbustest.php createOrder itemName itemPrice orderStatus';
}
