<?php

require_once __DIR__ . '/../models/Category.php';

$categories = [
    'dog' => new Category('Dog', 'bc6c25', 'fa-solid fa-dog'),
    'cat' => new Category('Cat', 'fefae0', 'fa-solid fa-cat'),
    'fish' => new Category('Fish', '8ecae6', 'fa-solid fa-fish-fins'),
    'bird' => new Category('Bird', '606c38', 'fa-solid fa-dove'),
];
