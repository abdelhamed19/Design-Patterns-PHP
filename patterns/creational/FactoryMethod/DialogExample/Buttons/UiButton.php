<?php

namespace Patterns\Creational\FactoryMethod\DialogExample\Buttons;

class UiButton extends Button
{
    public function show(): string
    {
        return "UiButton Show Method";
    }
    public function click(): string
    {
        return "UiButton Click Method";
    }
}