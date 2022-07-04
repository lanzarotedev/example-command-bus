<?php
namespace CommandBus;

/**
 * Command class - basic functionality.
 * Copyright (c) 2022 Vlad Madejczyk
 */

class Command
{
    public $commandName;
    public $commandStatus;

    public function __construct()
    {
    }

    public function setCommandName($name)
    {
        $this->commandName = $name;
    }

    public function getCommandName() : string
    {
        return $this->commandName;
    }

    public function setCommandStatus($status)
    {
        $this->commandStatus = $status;
    }

    public function getCommandStatus() : string
    {
        return $this->commandStatus;
    }
}