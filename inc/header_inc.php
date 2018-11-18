<header>
    <div class="brownbg">
        <ul class="container-1 center">
            <li class="up-head-1">
                <a href="index.php" class="link_nav" id="catalog_link">Каталог</a>
                <!-- <ul class="menu">
                    <?php //include_once 'nav_inc.php' ?>
                </ul> -->
            </li>
            <li class="up-head-2"><a href="index.php?about_us" class="link_nav">О нас</a></li>
            <li class="up-head-3"><a href="index.php?guarantee" class="link_nav">Гарантия</a></li>
            <li class="up-head-4"><a href="index.php?delivery" class="link_nav">Доставка</a></li>
            <li class="up-head-5"><a href="#" class="link_nav">Телефон</a></li>
            <li class="up-head-6"><a href="index.php?cart" class="link_nav">Корзина <?php echo count($_SESSION['cart']) ?></a></li>
        </ul>
    </div>
        <div class="container-2 center">
            <div class="shop_title"><a href="index.php">Название</a></div>
            <form action="?" method="get" class="search">
                <input type="text" name="search" placeholder="Живой поиск" value="" class="who" autocomplete="off">
                <button disabled id="search_button">Поиск</button>
                <ul class="search_result"></ul>
            </form>
        </div>
</header>