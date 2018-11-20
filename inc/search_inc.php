<?php
    $search = clear_string($_GET['search']);
    echo '<div class="sorting"><strong>«'.$search.'» результаты: <br/></strong></div>';

    if (!$products) {
        echo "Поиск не дал результатов";
    } else { ?>
        <ul class="catalog webpad">
            <?php include 'inc/all_products_inc.php'; ?>
        </ul>
<?php   } 

