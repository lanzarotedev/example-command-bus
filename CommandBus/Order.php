<?php
namespace CommandBus;

/**
 * Order class - basic functionality.
 * Copyright (c) 2022 Vlad Madejczyk
 */

class Order
{
    private $itemName;
    private $itemPrice;
    private $orderStatus;

    public function __construct($itemName, $itemPrice, $orderStatus)
    {
        $this->itemName = $itemName;
        $this->itemPrice = $itemPrice;
        $this->orderStatus = $orderStatus;
    }
}