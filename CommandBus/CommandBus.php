<?php
namespace CommandBus;

/**
 * The CommandBus class is a Singleton
 *
 * Copyright (c) 2022 Vlad Madejczyk
 */

class CommandBus
{
    private $commands = array();
    private $command;
    private $commandName;

    private function __construct()
    {
    }

    /**
     * getInstance with additional Command vs Handler map (array).
     *
     * @return object
     */
    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
            $instance->commands = array(
                'CreateOrder' => 'HandleCreateOrder',
                'DeleteOrder' => 'HandleDeleteOrder'
            );
        }

        return $instance;
    }

    /**
     * Executes command.
     *
     * @param Command $command the Command instance
     *
     * @return void
     */
    public static function executeCommand(Command $command)
    {
        $instance = CommandBus::getInstance();

        //we find correct handler for a specific command
        foreach ($instance->commands as $commandKey => $handlerName) {
            if($commandKey == $command->commandName) {
                $handlerName = '\\CommandBus\\' . $handlerName;
                $newOrder = new $handlerName();
                $newOrder->handle($command);
            }
        }
    }
}