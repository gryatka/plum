<div class="sorting">
    Сортировка по: <strong>имени</strong> (<span id="name_asc">от А до Я</span>/ <span id="name_desc">от Я до А</span>); <strong>цене</strong> (<span id="price_asc">по возрастанию</span>/ <span id="price_desc">по убыванию</span>)
</div>

<?php
    if (!$products) {
        echo 'Товаров в этой категории нет';
    } else { ?>
        <ul class="catalog">
            <?php include 'inc/all_products_inc.php'; ?>
        </ul>
<?php   } 
?>