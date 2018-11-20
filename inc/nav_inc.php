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
        <li class="row open_sub">
            <a href="?type=$translit_category_name" class="nav-link text-white col-10">$category_name</a>
            <a class="open_sub__btn nav-link text-white col-2"></a>
            <ul class="sm_catalog__submenu collapsible">
_END;
    foreach ($subcategories as $subcategory) {
        $subcategory_name          = $subcategory['subcategory_name'];
        $id_category               = $subcategory['id_category'];
        $translit_subcategory_name = deleteTrash(strtolower(translit($subcategory_name)));
            if ($category_id == $id_category) {
                echo<<<_END
                            <li><a href="?type=$translit_category_name&subtype=$translit_subcategory_name" class="nav-link text-white">$subcategory_name</a></li>
_END;
            }
    }
    echo<<<_END
            </ul>
        </li>
_END;
    }
?>
<li>
    <a href="index.php?news" class="nav-link text-white marl">Новинки</a>
</li>
<li>
    <a href="index.php?sale" class="nav-link text-white marl">Распродажа</a>
</li>