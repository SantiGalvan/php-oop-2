<?php if (isset($product) && $product instanceof ToyProduct) : ?>
    <div class="card" style="background-color: #<?= $product->getCategory()->getColor() ?>">
        <div class="card-header">
            <?= $product->getCategory()->getName() ?>
            <i class="<?= $product->getCategory()->getIcon() ?>"></i>
        </div>
        <div class="card-image">
            <img src="<?= $product->getImage() ?>" class="card-img-top mt-2" alt="<?= $product->getName() ?>">
        </div>
        <div class="card-body">
            <h3 class="card-title mb-3"><?= $product->getName() ?></h3>
            <div class="price mb-2">
                <i class="fa-solid fa-euro-sign"></i>
                <?= $product->getPrice() ?>
            </div>
            <p class="card-text"><strong>Materiali: </strong><?= $product->listMaterials() ?></p>
            <p class="card-text"><strong>Colore: </strong><?= $product->getColor() ?></p>
        </div>
    </div>
<?php endif ?>