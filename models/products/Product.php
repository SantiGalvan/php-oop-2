<?php

require_once __DIR__ . '/../Category.php';

class Product
{
    protected $id;
    protected $name;
    protected $image;
    protected $price;
    protected $category;

    public function __construct($name, $image, $price, Category $category)
    {
        $this->setId();
        $this->setName($name);
        $this->setImage($image);
        $this->setPrice($price);
        $this->setCategory($category);
    }

    public function getId()
    {
        return $this->id;
    }

    private function setId()
    {
        $this->id = uniqid();
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory(Category $category)
    {
        if ($category instanceof Category) {
            $this->category = $category;
            return true;
        } else return false;
    }
}
