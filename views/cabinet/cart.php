<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="left-sidebar">

        <h2>Список словарей</h2>
        <div class="panel-group category-products">
            <?php foreach ($categories as $categoryItem): ?>
                <h4 class="panel-title">
                    <a href="/category/<?php echo $categoryItem['id'];?>">
                        <?php echo $categoryItem['name'];?>
                    </a>
                </h4>
            <?php endforeach; ?>
        </div>
        
    </div>

    <div class="col-sm-9 padding-right">
        <h2 class="title text-center">Закладки</h2>
        
        <?php if ($productsInCart): ?>
            <p>Вы выбрали такие статьи:</p>
            <?php foreach ($products as $product): ?>
             <h3><?php echo $product['name'];?></h3>
             <a href="/product/<?php echo $product['id'];?>">
                <?php echo $product['content'];?>
            </a>
            <a href="/cart/delete/<?php echo $product['id'];?>">
                <i class="fa fa-times"></i>
            </a>
        <?php endforeach; ?>
        
        
    <?php else: ?>
        <p>Закладок нет</p>
        
        <a class="btn btn-default checkout" href="/"><i class="fa fa-shopping-cart"></i> Вернуться на главную</a>
    <?php endif; ?>

</div>                

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>