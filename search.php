<?php

include_once 'db.php';
include_once 'db_query.php';
include_once 'functions.php';

if(isset($_POST["search"])){
    
    $result_search = get_search($pdo);

    foreach ($result_search as $row) {
        echo "
            <li>
                <a href='index.php?product=".$row["product_id"]."'>".$row["product_name"]."</a>
            </li>
        ";
    }

}