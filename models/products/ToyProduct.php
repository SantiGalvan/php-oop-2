<?php

require_once __DIR__ . '/Product.php';

class ToyProduct extends Product
{
    private $materials;
    private $color;
    public static $type = 'toy';
    public static $icon = 'fas fa-bone';

    public function __construct($name, $image, $price, Category $category, $materials, $color)
    {
        parent::__construct($name, $image, $price, $category);
        $this->setMaterials($materials);
        $this->setColor($color);
    }

    public function getMaterials()
    {
        return $this->materials;
    }

    public function listMaterials()
    {
        return implode(',', $this->materials) . '.';
    }

    public function setMaterials(array $materials)
    {
        $this->materials = $materials;
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
