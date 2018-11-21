<li>
    <div class="sm_catalog__close_btn">
        <div class="catalog_close_btn">
            <a class="text-white catalog_link"></a>
        </div>
    </div>
</li>
<?php
    foreach ($categories as $category) {
        $category_id            = $category['category_id'];
        $category_name          = $category['category_name'];
        $translit_category_name = deleteTrash(strtolower(translit($category_name)));
    echo<<<_END
        <li>
            <a href="?type=$translit_category_name" class="text-white sm_catalog__link">$category_name</a>
        </li>
_END;
    }
?>
<li>
    <a href="index.php?news" class="text-white sm_catalog__link"><strong>Новинки</strong></a>
</li>
<li>
    <a href="index.php?sale" class="text-white sm_catalog__link"><strong>Распродажа</strong></a>
</li>