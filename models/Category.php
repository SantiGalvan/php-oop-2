<?php

class Category
{
    private $name;
    private $color;
    private $icon;

    public function __construct($name, $color, $icon)
    {
        $this->setName($name);
        $this->setColor($color);
        $this->setIcon($icon);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function setIcon($icon)
    {
        $this->icon = $icon;
    }
}
