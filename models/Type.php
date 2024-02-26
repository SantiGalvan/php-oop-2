<?php

require_once __DIR__ . '/Category.php';

class Type
{
    public $category;
    public $type_name;


    public function __construct(Category $category,  $type_name)
    {
        $this->category = $category;
        $this->type_name = $type_name;
    }
}
