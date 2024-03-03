<?php

require_once __DIR__ . '/Product.php';

class AccessoryProduct extends Product
{
    private $color;
    private $size;
    public static $type = 'accessory';
    public static $icon = 'fas fa-house';

    public function __construct($name, $image, $price, Category $category, $color, $size)
    {
        parent::__construct($name, $image, $price, $category);
        $this->setSize($size);
        $this->setColor($color);
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setcolor($color)
    {
        $this->color = $color;
    }
}
