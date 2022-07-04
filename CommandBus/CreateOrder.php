<?php
namespace CommandBus;

/**
 * CreateOrder class - basic functionality.
 * Copyright (c) 2022 Vlad Madejczyk
 */

require_once 'Command.php';

class CreateOrder extends Command
{
    private $itemName;
    private $itemPrice;
    private $orderStatus;
    //protected $commandName = 'CreateOrder';

    public function __construct($itemName, $itemPrice, $orderStatus)
    {
        $this->itemName = $itemName;
        $this->itemPrice = $itemPrice;
        $this->orderStatus = $orderStatus;
        $this->commandName = 'CreateOrder';
    }

    /**
     * Get Order item name.
     * @return string
     */
    public function getItemName() : string
    {
        return $this->itemName;
    }

    /**
     * Get Order item price.
     * @return float
     */
    public function getItemPrice() : float
    {
        return $this->itemPrice;
    }

    /**
     * Get Order status: "completed', 'processing', 'failed'
     * @return string
     */
    public function getOrderStatus() : string
    {
        return $this->orderStatus;
    }
}