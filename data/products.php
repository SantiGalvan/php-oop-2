<?php

require_once __DIR__ . '/categories.php';
require_once __DIR__ . '/../models/products/FoodProduct.php';
require_once __DIR__ . '/../models/products/ToyProduct.php';
require_once __DIR__ . '/../models/products/AccessoryProduct.php';

// Product Image
$food_dog_img = 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000';
$food_dog_2_img = 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg';
$food_cat_img = 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg';
$food_fish_img = 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg';
$accessory_bird_img = 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg';
$accessory_fish_img = 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg';
$toy_dog_img = 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg';
$toy_cat_img = 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg';

// Products
$food_dog = new FoodProduct('Royal Canin', $food_dog_img, 29, $categories['dog'], ['salmone', 'riso'], '2025-10-10');
$food_dog_2 = new FoodProduct('Holistic Maintenance', $food_dog_2_img, 25, $categories['dog'], ['pollo', 'riso'], '2025-05-10');
$food_cat = new FoodProduct('Cat Daily', $food_cat_img, 15, $categories['cat'], ['vitello', 'riso'], '2024-12-09');
$food_fish = new FoodProduct('Guppy', $food_fish_img, 7, $categories['fish'], ['cereali', 'alghe'], '2026-03-12');
$accessory_bird = new AccessoryProduct('Voliera', $accessory_bird_img, 35, $categories['bird'], 'white', '512x230');
$accessory_fish = new AccessoryProduct('Cartucce Filtranti per Filtro EasyCrystal', $accessory_fish_img, 5, $categories['fish'], 'white', '12x30');
$toy_dog = new ToyProduct('Kong Classic', $toy_dog_img, 2, $categories['dog'], ['gomma'], 'red');
$toy_cat = new ToyProduct('Topini di peluche Trixie', $toy_cat_img, 1, $categories['cat'], ['gomma', 'tela'], 'gray');

// Array di prodotti
$products = [$food_dog, $food_dog_2, $food_cat, $food_fish, $accessory_bird, $accessory_fish, $toy_dog, $toy_cat];
