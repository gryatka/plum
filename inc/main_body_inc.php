<div class="container-3 center">

    <?php 
        include_once 'inc/side_menu_inc.php';
    ?>

    <div class="main_block_products">
        <?php
            if (isset($_GET['type'])) {
                include 'main_products_page.php';
            } elseif (isset($_GET['sale'])) { ?>
                <ul class="catalog">
                    <?php include 'inc/sale_products_inc.php' ?>
                </ul>
        <?php   } elseif (isset($_GET['news'])) { ?>
                <ul class="catalog">
                    <?php include 'inc/new_products_inc.php' ?>
                </ul>
        <?php   } elseif (isset($_GET['search'])) { ?>
                    <?php include 'inc/search_inc.php' ?>
        <?php   } elseif (isset($_GET['product'])) {
                    include 'inc/product_inc.php';
                } else {
                include 'categoried_products_page.php';
            }
        ?>
    </div>
    
</div>