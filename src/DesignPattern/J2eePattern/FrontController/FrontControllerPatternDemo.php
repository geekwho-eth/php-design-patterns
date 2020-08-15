<?php

namespace DesignPattern\J2eePattern\FrontController;

class FrontControllerPatternDemo
{
    private $frontController = null;

    public function run()
    {
        $this->frontController = new FrontController();
        $this->frontController->dispatchRequest("HOME");
        $this->frontController->dispatchRequest("STUDENT");
    }
}
