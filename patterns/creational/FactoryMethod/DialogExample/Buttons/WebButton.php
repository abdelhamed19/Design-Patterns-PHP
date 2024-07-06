<?php

namespace Patterns\Creational\FactoryMethod\DialogExample\Buttons;

class WebButton extends Button
{
    public function show(): string
    {
        return "WebButton Show Method";
    }
    public function click(): string
    {
        return "WebButton Click Method";
    }
}