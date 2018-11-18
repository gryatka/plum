<?php
    $products      = get_products($pdo);
    $new_products  = get_new_products($pdo);
    $sale_products = get_sale_products($pdo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style\main.css">
    <title>Main</title>
</head>
<body>
<?php
    include_once 'inc/header_inc.php';
    
    if (isset($_GET['cart'])) {
        $cart  = array ();
        $total_price = 0;
        foreach ($_SESSION['cart'] as $id) {
            foreach ($products as $product) {
                if ($product['product_id'] == $id) {
                    $cart[] = $product;
                        if ($product['new_price'] != NULL) {
                            $total_price += $product['new_price'];
                        } else $total_price += $product['price'];
                    break;
                }
            }
        }
        include_once 'inc/cart.php';
    } else include_once 'inc/main_body_inc.php';

    include_once 'inc/footer_inc.php';
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="script/script.js"></script>
<script src="script/jquery.cookie.js"></script>
</body>
</html>