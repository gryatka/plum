<?php

    $search = clear_string($_GET['search']);
    echo '«'.$search.'» результаты: <br/>';

    if (!$products) {
        echo 'Поиск не дал результатов';
    } else { ?>
        <ul class="catalog">
            <?php include 'inc/all_products_inc.php'; ?>
        </ul>
<?php   } 

