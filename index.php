<?php

require_once __DIR__ . '/models/Category.php';
require_once __DIR__ . '/models/Type.php';
require_once __DIR__ . '/models/Product.php';

// Category
$dog = new Category('Dog', 'bc6c25', 'fa-solid fa-dog');
$cat = new Category('Cat', 'fefae0', 'fa-solid fa-cat');
$bird = new Category('Bird', '606c38', 'fa-solid fa-dove');
$fish = new Category('Fish', '8ecae6', 'fa-solid fa-fish-fins');

// Product Image
$food_dog_img = 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000';
$food_dog_2_img = 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg';
$food_cat_img = 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg';
$food_fish_img = 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg';
$accessory_bird_img = 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg';
$accessory_fish_img = 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg';
$toy_dog_img = 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg';
$toy_cat_img = 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg';

// Type & Product
$food_dog = new Product($dog, 'Food', 'Royal Canin', $food_dog_img, 29, 'Royal Canin', 'Mini Adult');
$food_dog_2 = new Product($dog, 'Food', 'Holistic Maintenance', $food_dog_2_img, 25, 'Almo Nature', 'Medium Large', 'Tonno e Riso');
$food_cat = new Product($cat, 'Food', 'Cat Daily', $food_cat_img, 15, 'Almo Nature', 'Lattina');
$food_fish = new Product($fish, 'Food', 'Guppy', $food_fish_img, 7, 'Tetra', 'Mangime per Pesci', 'Fiocchi');
$accessory_bird = new Product($bird, 'Accessory', 'Voliera', $accessory_bird_img, 35, 'Wilma', 'In Legno');
$accessory_fish = new Product($fish, 'Accessory', 'Cartucce Filtranti per Filtro EasyCrystal', $accessory_fish_img, 5, 'Tetra');
$toy_dog = new Product($dog, 'Toy', 'Kong Classic', $toy_dog_img, 2, 'Kong');
$toy_cat = new Product($cat, 'Toy', 'Topini di peluche Trixie', $toy_cat_img, 1, 'Trixie');

// Array di prodotti
$products = [$food_dog, $food_dog_2, $food_cat, $food_fish, $accessory_bird, $accessory_fish, $toy_dog, $toy_cat];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">
        <div class="row row-gap-4 my-4 text-center">
            <?php foreach ($products as $product) : ?>
                <div class="col-3">
                    <div style="background-color: #<?= $product->category->color ?>" class="card">
                        <div class="card-image">
                            <img src="<?= $product->product_img ?>" class="card-img-top" alt="<?= $product->product_title ?>">
                        </div>
                        <i class="<?= $product->category->icon ?> fa-2x d-flex justify-content-center my-4"></i>
                        <div class="card-body">
                            <h5 class="card-title mb-2"><?= $product->product_title ?></h5>
                            <p class="card-text mb-2"><?= $product->product_info ?></p>
                            <div class="brand mb-2"><?= $product->product_brand ?></div>
                            <div class="price">
                                <i class="fa-solid fa-euro-sign"></i>
                                <?= $product->product_price ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>