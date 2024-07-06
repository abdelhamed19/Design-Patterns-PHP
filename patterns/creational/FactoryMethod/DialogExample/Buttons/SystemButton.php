<?php 
namespace Patterns\Creational\FactoryMethod\DialogExample\Buttons;
class SystemButton extends Button{

    public function show(): string
    {
        return "SystemButton Show Method";
    }
    public function click(): string
    {
        return "SystemButton Click Method";
    }
}