<?php

namespace DesignPattern\Mediator;

class User
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function sendMessage($message)
    {
        ChatRoom::showMessage($this, $message);
    }
}
