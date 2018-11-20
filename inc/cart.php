<div class="cart_bg">
    <div class="container">
        <h2>Корзина</h2>
            <div class="row justify-content-between">
                <div class="col-lg-6 col-12 block_cart wrapper">
                        <ul class="webpad wrapper">
                            <?php if (count($cart) > 0): 
                                foreach ($_SESSION['cart'] as $id) {
                                    foreach ($products as $product) {
                                        if ($product['product_id'] == $id) {
                                            $product_name = $product['product_name'];
                                            $price        = $product['price'];
                                            $new_price    = $product['new_price'];
                                            $image        = $product['image'];
                                            $get_image    = get_image($image);
                                            echo<<<_END
                                            <li class="list_product">
                                                <div class="cart_image">$get_image</div>
                                                <div class="cart_name">$product_name</div>
                                                <div class="cart_counter"><span class="count" id="count_desc">-</span> штук <span class="count" id="count_asc">+</span></div>
                                                <div class="cart_price">$price/$new_price</div>
                                                <div class="cart_delete">
                                                    <form action="?" method="post">
                                                        <input type="hidden" name="id" value="$id">
                                                        <input type="button" name="delete_product" value="x">
                                                    </form>
                                                </div>
                                            </li>
_END;
                                        }
                                    }
                                } ?>
                            <?php else: echo "Корзина пуста";
                            endif; ?>
                        </ul>
                    <div class="total">
                        <div>
                            <form action="" method="post">
                                <input type="submit" name="cart" value="Очистить корзину">
                            </form>
                        </div>
                        <div>Всего товаров: <?php echo count($_SESSION['cart']) ?> </div>
                        <div>Итоговая цена <?php echo $total_price ?> </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 cart_order wrapper">
                    <div class="block_cart block_order">
                        <h3>Оформление заказа</h3>
                        <h4>Получатель</h4>
                        <div class="cart_addressee">
                            <div class="cart_number">
                                Телефон
                                <div>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="cart_name">
                                Имя
                                <div>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <h4>Доставка</h4>
                        <div>
                            <div class="delivery">
                                <div class="block_it">
                                    <div>Доставка</div>
                                    <div><input id="block_it" type="text"></div>
                                </div>
                            </div>
                            <label for="pickup">
                                Самовывоз <input type="checkbox" name="pickup" id="pickup">
                            </label>
                        </div>
                        <div>Итоговая цена с доставкой\без</div>
                        <button>Подтвердить заказ</button>
                    </div>
                </div>
            </div>
    </div>
</div>