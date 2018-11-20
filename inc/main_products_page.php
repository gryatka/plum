<?php
    if (!$products) {
        echo "<strong>Товаров в этой категории нет</strong>";
    } else { ?>
    <div class="sorting">
        Сортировка по: <strong>имени</strong> (<span id="name_asc">от А до Я</span>/ <span id="name_desc">от Я до А</span>); <strong>цене</strong> (<span id="price_asc">по возрастанию</span>/ <span id="price_desc">по убыванию</span>)
    </div>
        <ul class="catalog webpad">
            <?php include 'inc/all_products_inc.php'; ?>
        </ul>
<?php   } 
?>