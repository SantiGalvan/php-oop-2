<?php

require_once __DIR__ . '/../models/Category.php';

$categories = [
    'dog' => new Category('Dog', 'bc6c25', 'fa-solid fa-dog'),
    'cat' => new Category('Cat', 'fefae0', 'fa-solid fa-cat'),
    'fish' => new Category('Fish', '8ecae6', 'fa-solid fa-fish-fins'),
    'bird' => new Category('Bird', 'dda15e', 'fa-solid fa-dove'),
];
