<header>
    <div class="bg-gray">
        <div class="container">
            <div class="sm-menu">
                <ul class="wopad row nav">
                    <li class="col-8 wopad">
                        <a href="#" class="nav-link text-white">Телефон</a>
                    </li>
                    <li class="col-2 wopad">
                        <div class="text-center">
                            <a href="index.php?cart" class="nav-link text-white cart_link">&#160;<?php echo count($_SESSION['cart']) ?></a>
                        </div>
                    </li>
                    <li class="col-2 wopad">
                        <div class="collapsable_menu">
                            <div class="sm_menu_btn">
                                <a class="nav-link text-white">M</a>
                            </div>
                        </div>
                    </li>
                </ul>
                    <ul class="wopad collapsed_menu row nav">
                        <li class="wopad col-4">
                            <a href="index.php?about_us" class="nav-link text-white">О нас</a>
                        </li>
                        <li class="wopad col-4">
                            <a href="index.php?guarantee" class="nav-link text-white">Гарантия</a>
                        </li>
                        <li class="wopad col-4">
                            <a href="index.php?delivery" class="nav-link text-white">Доставка</a>
                        </li>
                    </ul>
            </div>
            <div class="md-menu">
                <ul class="wopad row nav">
                    <li class="wopad col-md-2 up-head-1">
                        <a href="index.php" class="nav-link text-white" id="catalog_link">Каталог</a>
                    </li>
                    <li class="wopad col-md-2 up-head-2">
                        <a href="index.php?about_us" class="nav-link text-white">О нас</a>
                    </li>
                    <li class="wopad col-md-2 up-head-3">
                        <a href="index.php?guarantee" class="nav-link text-white">Гарантия</a>
                    </li>
                    <li class="wopad col-md-2 up-head-4">
                        <a href="index.php?delivery" class="nav-link text-white">Доставка</a>
                    </li>
                    <li class="wopad col-md-3 up-head-5">
                        <a href="#" class="nav-link text-white">Телефон</a>
                    </li>
                    <li class="wopad col-md-1 text-center">
                        <a href="index.php?cart" class="nav-link text-white cart_link">&#160;<?php echo count($_SESSION['cart']) ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-3 col-md-4 col-lg-3">
                    <div class="shop_title"><a href="index.php">Название</a></div>
                </div>
                <div class="col-9 col-md-8 col-lg-9">
                    <form action="?" method="get" class="search">
                        <input type="text" name="search" placeholder="Живой поиск" value="" class="who" autocomplete="off">
                        <button disabled id="search_button">Поиск</button>
                        <ul class="search_result"></ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>