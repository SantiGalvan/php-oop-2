<?php

require_once __DIR__ . '/Type.php';

class Product extends Type
{
    public $product_title;
    public $product_img;
    public $product_price;
    public $product_brand;
    public $product_info;
    public $product_type;

    public function __construct($category, $type_name, $product_title, $product_img, $product_price, $product_brand, $product_info = null, $product_type = null)
    {
        parent::__construct($category, $type_name);
        $this->product_title = $product_title;
        $this->product_img = $product_img;
        $this->product_price = $product_price;
        $this->product_brand = $product_brand;
        $this->product_info = $product_info;
        $this->product_type = $product_type;
    }
}
