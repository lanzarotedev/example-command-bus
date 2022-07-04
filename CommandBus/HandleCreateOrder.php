<?php
namespace CommandBus;

require_once 'Order.php';
require_once 'StorageManager.php';

/**
 * HandleCreateOrder class - basic functionality.
 * Copyright (c) 2022 Vlad Madejczyk
 */

class HandleCreateOrder
{
    use StorageManager;

    /**
     * Handles specific command (create) related to a specific object (order).
     *
     * @param Command $command the Command instance
     *
     * @return void
     */
    public function handle(CreateOrder $command) : bool
    {
        $order = new Order(
            $command->getItemName(),
            $command->getItemPrice(),
            $command->getOrderStatus()
        );

        $this->saveOrder($order);

        return true;
    }
}