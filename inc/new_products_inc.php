<?php

if (isset($_GET['news'])) {
    echo '
        <div class="sorting">
            Сортировка по: <strong>имени</strong> (<span id="name_asc">от А до Я</span>/ <span id="name_desc">от Я до А</span>); <strong>цене</strong> (<span id="price_asc">по возрастанию</span>/ <span id="price_desc">по убыванию</span>)
        </div>
    ';
}

    foreach ($new_products as $product) {
        $product_id         = $product['product_id'];
        $product_name       = $product['product_name'];
        $price              = $product['price'];
        $new_price          = $product['new_price'];
        $image              = $product['img'];
        $category_name      = $product['category_name'];
        $subcategory_name   = $product['subcategory_name'];
        $get_image          = get_image($image);
            echo<<<_END
                <li class="catalog__element">
                    <a href="index.php?product=$product_id" class="catalog__element_link">
                        <div class="preview_img">
                            $get_image
                        </div>
                        <div class="name">
                            $product_name
                        </div>
                    </a>
                    <div class="preview_description">
                        $category_name $subcategory_name
                    </div>
                    <div class="price">
                        <span id="price">$price р.</span>
                        <br/>
_END;
        if ($new_price != NULL) {
            echo<<<_END
                <span id="new_price">new price $new_price</span>
_END;
        }
            echo<<<_END
                    </div>
                    <div class="cart">
                        <form class="add_cart" action="" method="post">
                            <div>
                                <input type="hidden" name="id" value="$product_id">
                                <input type="submit" name="to_cart" value="В корзину">
                            </div>
                        </form>
                    </div>
                </li>
_END;
    }