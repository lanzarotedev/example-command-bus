<?php
namespace CommandBus;

/**
 * StorageManager trait - persistence - saving/reading order data from a file.
 * Copyright (c) 2022 Vlad Madejczyk
 */

trait StorageManager
{

    public function __construct()
    {
    }

    /**
     * Saves serialized Order (to a file), to be added in v. 1.1.0
     *
     * @param Order $order
     *
     * @return void
     */
    public function saveOrder(Order $order)
    {
        print_r($order); //serialize and save to a file, to be added in version 1.1.0
        echo 'order has been saved' . "\n";
    }

    public function readAllOrders()
    {

    }

    public function readOrder($id)
    {

    }
}