<?php
// БЕРЁМ КАТЕГОРИИ
    try {
        $query  = 'SELECT     category_id, category_name
                   FROM       category';
        $result = $pdo->query($query);
    }
    catch (PDOexepton $e) {
        echo "Невозможно получить категории " . $e->getMessage();
        exit();
    }
    foreach ($result as $row) {
        $categories[] = array(
            'category_name'     => $row['category_name'],
            'category_id'       => $row['category_id'],
        );
    }
// БЕРЁМ ПОДКАТЕГОРИИ
    try {
        $query  = 'SELECT     subcategory_name, id_category
                   FROM       category
                   INNER JOIN merj_category
                   ON         category.category_id = id_category
                   INNER JOIN subcategory
                   ON         id_subcategory = subcategory.subcategory_id';
        $result = $pdo->query($query);
    }
    catch (PDOexepton $e) {
        echo "Невозможно получить категории " . $e->getMessage();
        exit();
    }
    foreach ($result as $row) {
        $subcategories[] = array(
            'id_category'        => $row['id_category'],
            'subcategory_name'   => $row['subcategory_name']
        );
    }
// БЕРЁМ ТОВАРЫ
function get_products($pdo) {
    try {
        
            if (isset($_GET['type'])) {
                $type = clear_string($_GET['type']);
                $type1 = "AND translit_category_name = '$type'";
            } else $type1 = '';
            if (isset($_GET['type']) && isset($_GET['subtype'])) {
                $subtype = clear_string($_GET['subtype']);
                $subtype1 = "AND translit_subcategory_name = '$subtype'";
            } else $subtype1 = '';
            if (isset($_GET['search'])) {
                $like = clear_string($_GET['search']);
                $like1 = "AND product_name LIKE '%$like%'";
            } else $like1 = '';

        $query  = "SELECT     * 
                   FROM       products
                   INNER JOIN subcategory
                   ON         products.id_subcategory = subcategory_id
                   INNER JOIN category
                   ON         products.id_category = category_id
                   WHERE      visible = 1 $type1 $subtype1 $like1";
        
        $result = $pdo->query($query);

    }
    catch (PDOexepton $e) {
        echo "Невозможно получить товары " . $e->getMessage();
    }
    foreach ($result as $row) {
        $products[] = array(
            'product_id'            => $row['product_id'],
            'product_name'          => $row['product_name'],
            'price'                 => $row['price'],
            'new_price'             => $row['new_price'],
            'description'           => $row['description'],
            'image'                 => $row['img'],
            'id_category'           => $row['id_category'],
            'id_subcategory'        => $row['id_subcategory'],
            'category_name'         => $row['category_name'],
            'subcategory_name'      => $row['subcategory_name']
        );
    }
    
    if (isset($products)) {
        return $products;
    } else return $products = NULL;

}
// БЕРЁМ НОВЫЕ ТОВАРЫ
function get_new_products($pdo) {
    try {

        if (!isset($_GET['news'])) {
            $limit = ' LIMIT 4 ';
        } else $limit = ' LIMIT 18446744073709551615 ';

        $query  = "SELECT     * 
                   FROM       products
                   INNER JOIN subcategory
                   ON         products.id_subcategory = subcategory_id
                   INNER JOIN category
                   ON         products.id_category = category_id
                   WHERE      visible = 1 AND news = 1                   
                   ORDER BY   add_date DESC
                   $limit";

        $result = $pdo->query($query);
    }
    catch (PDOexepton $e) {
        echo "Невозможно получить товары " . $e->getMessage();
    }
    return $result;
}
// БЕРЁМ ТОВАРЫ СО СКИДКОЙ
function get_sale_products($pdo) {
    try {

        if (!isset($_GET['sale'])) {
            $limit = ' LIMIT 4 ';
        } else $limit = ' LIMIT 18446744073709551615 ';

        $query  = "SELECT     * 
                   FROM       products
                   INNER JOIN subcategory
                   ON         products.id_subcategory = subcategory_id
                   INNER JOIN category
                   ON         products.id_category = category_id
                   WHERE      visible = 1 AND sale = 1
                   $limit";
                   
        $result = $pdo->query($query);
    }
    catch (PDOexepton $e) {
        echo "Невозможно получить товары " . $e->getMessage();
    }
    return $result;
}
// ТОВАРЫ НАЙДЕННЫЕ В ПОИСКЕ
function get_search($pdo) {
    if (isset($_POST["search"])) {
        try {
            $search = $_POST["search"];
            $query = "SELECT * 
                      FROM   products 
                      WHERE  visible = 1 
                        AND  product_name LIKE '%$search%' 
                      LIMIT  3";
            $result_search = $pdo->query($query);
        }
        catch (PDOexepton $e) {
            echo "Невозможно получить товары " . $e->getMessage();
        }
    }
    return $result_search;
}
// ТОВАР
function get_one_product($pdo) {
    if (isset($_GET["product"])) {
        try {
            $id = $_GET["product"];
            $query = "SELECT * 
                      FROM   products 
                      WHERE  visible = 1 AND product_id = $id";
            $result_one_product = $pdo->query($query);
        }
        catch (PDOexepton $e) {
            echo "Невозможно получить товар " . $e->getMessage();
        }
    }
    return $result_one_product;
}
//добавление товара в корзину
if (isset($_POST['to_cart']) and $_POST['to_cart'] == 'В корзину') {
    $_SESSION['cart'][] = $_POST['id'];
    header("Location: " . $_SERVER["REQUEST_URI"]);
    exit();
}
    
// //очищение корзины
if (isset($_POST['cart']) and $_POST['cart'] == 'Очистить корзину') {
    $_SESSION['cart'] = array();
    header("Location: " . $_SERVER["REQUEST_URI"]);
    exit();
}

// //удаление из корзины продукта
// if (isset($_POST['delete_product']) and $_POST['delete_product'] == 'x') {
//     unset($_SESSION['cart'][$_POST['id']]);
// }

    // if (isset($_POST['action']) and $_POST['action'] == "delete") {
    //     echo "Удалить";
    // }