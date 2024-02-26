<?php 

class Category {
    public $name;
    public $color;
    public $icon;

    public function __construct($name, $color, $icon) {
        $this->name = $name;
        $this->color = $color;
        $this->icon = $icon;
    }
}