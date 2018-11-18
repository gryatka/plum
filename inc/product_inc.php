<?php

    $id = clear_string($_GET['product']);

    $one_product = get_one_product($pdo);

    foreach ($one_product as $product) {
        $product_id   = $product['product_id'];
        $image        = $product['img'];
        $product_name = $product['product_name'];
        $price        = $product['price'];
        $description  = $product['description'];
        $new_price    = $product['new_price'];
        $get_image    = get_image($image);

        echo<<<_END
        <div class="product">
            <div class="product_img">
                $get_image
            </div>
            <div class="product_description">
                <h3>$product_name</h3>
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
                <form class="add_cart" action="" method="post">
                    <div>
                        <input type="hidden" name="id" value="$product_id">
                        <input type="submit" name="to_cart" value="В корзину">
                    </div>
                </form>
                <p>$description</p>
            </div>
        </div>
_END;
    }

?>
