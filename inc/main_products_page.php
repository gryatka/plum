    <div class="sm_subcat">
        <div>Раздел:</div>
        <div class="collapse_subcat">
            <div class="collapse_subcat__name">
            </div>
            <div class="collapse_subcat__btn">
                <span class="">Раздел..</span>
            </div>
        </div>
        <ul class="collapsible_subcat wopad">
            <li class="padl">
                <a href="index.php?type=<?php echo $_GET['type'] ?>" class="nav-link link_hover">Все</a>
            </li>
        <?php
    
    foreach ($categories as $category) {
        $category_id                 = $category['category_id'];
        $category_name               = $category['category_name'];
        $translit_category_name      = deleteTrash(strtolower(translit($category_name)));
        $translit_category_name__get = $_GET['type'];
        if ($translit_category_name == $translit_category_name__get) {
            foreach ($subcategories as $subcategory) {
                $subcategory_name          = $subcategory['subcategory_name'];
                $id_category               = $subcategory['id_category'];
                $translit_subcategory_name = deleteTrash(strtolower(translit($subcategory_name)));
                if ($category_id == $id_category) {
                    echo '
                        <li class="padl">
                            <a href="index.php?type='.$translit_category_name.'&subtype='.$translit_subcategory_name.'" class="nav-link link_hover">' . $subcategory_name . '</a>
                        </li>
                    ';
                }
            }
        } else ;
    }

        ?>
        </ul>
    </div>

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