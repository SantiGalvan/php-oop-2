<?php

class Type extends Category {
    public $type_name;


    public function __construct($name, $color, $icon, $type_name) {
        parent::__construct($name, $color, $icon);
        $this->type_name = $type_name;
    }
}