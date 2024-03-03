<?php

require_once __DIR__ . '/data/products.php';

// Creo tre array separati e filtrati
$food_products = array_filter($products, fn ($p) => $p::$type === 'food');
$toy_products = array_filter($products, fn ($p) => $p::$type === 'toy');
$accessory_products = array_filter($products, fn ($p) => $p::$type === 'accessory');

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

    <header>
        <div class="container d-flex justify-content-between">
            <div class="title d-flex align-items-center">
                <h1>E-commerce</h1>
            </div>
            <div class="nav d-flex">
                <ul class="d-flex gap-4 h-100">
                    <li class="d-flex align-items-center"><a href="#section-food">Food</a></li>
                    <li class="d-flex align-items-center"><a href="#section-toy">Toys</a></li>
                    <li class="d-flex align-items-center"><a href="#section-accessory">Accessory</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main>

        <!-- Section Food -->
        <section id="section-food">
            <div class="container">
                <h1 class="text-center my-5">Food <i class="<?= FoodProduct::$icon ?>" class="fa-2x"></i></h1>
                <div class="row row-gap-4 my-4 text-center">
                    <?php foreach ($food_products as $product) : ?>
                        <div class="col-3">
                            <?php include __DIR__ . '/includes/templates/cards/foodcard.php' ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Section Toy -->
        <section id="section-toy">
            <div class="container">
                <h1 class="text-center my-5">Toys <i class="<?= ToyProduct::$icon ?>" class="fa-2x"></i></h1>
                <div class="row row-gap-4 my-4 text-center">
                    <?php foreach ($toy_products as $product) : ?>
                        <div class="col-3">
                            <?php include __DIR__ . '/includes/templates/cards/toycard.php' ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Section Accessory -->
        <section id="section-accessory" class="pb-4">
            <div class="container">
                <h1 class="text-center my-5">Accessory <i class="<?= AccessoryProduct::$icon ?>" class="fa-2x"></i></h1>
                <div class="row row-gap-4 my-4 text-center">
                    <?php foreach ($accessory_products as $product) : ?>
                        <div class="col-3">
                            <?php include __DIR__ . '/includes/templates/cards/accessorycard.php' ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

</body>

</html>