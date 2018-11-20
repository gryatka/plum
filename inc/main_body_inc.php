<div class="wrapper">
    <div class="container">
        <div class="sm_catalog__list">
            <ul class="sm_catalog__menu bg-black">
                <?php include_once 'nav_inc.php' ?>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <?php
                    include_once 'inc/side_menu_inc.php';
                ?>
            </div>
            <div class="col-md-8 col-lg-9">
                <div class="main_block_products">
                    <?php
                        if (isset($_GET['type'])) {
                            include 'main_products_page.php';
                        } elseif (isset($_GET['sale'])) { ?>
                            <ul class="catalog wopad">
                                <?php include 'inc/sale_products_inc.php' ?>
                            </ul>
                    <?php   } elseif (isset($_GET['news'])) { ?>
                            <ul class="catalog wopad">
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
        </div>
    </div>
</div>