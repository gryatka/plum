<?php
    foreach ($categories as $category) {
        $category_id            = $category['category_id'];
        $category_name          = $category['category_name'];
        $translit_category_name = deleteTrash(strtolower(translit($category_name)));
    echo<<<_END
        <li><a href="?type=$translit_category_name" class="link_nav">$category_name</a>
            <ul class="submenu">
_END;
    foreach ($subcategories as $subcategory) {
        $subcategory_name          = $subcategory['subcategory_name'];
        $id_category               = $subcategory['id_category'];
        $translit_subcategory_name = deleteTrash(strtolower(translit($subcategory_name)));
            if ($category_id == $id_category) {
                echo<<<_END
                            <li><a href="?type=$translit_category_name&subtype=$translit_subcategory_name" class="link_nav">$subcategory_name</a></li>
_END;
            }
    }
    echo<<<_END
            </ul>
        </li>
_END;
    }