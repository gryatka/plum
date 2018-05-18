<!--==================== SOME DB SHIT ====================-->

<?php

$dbhost   = "localhost";
$dbname   = "lib_posts";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);
$db->query( "SET CHARSET utf8" );

    //получение всех статей
function get_posts_all() {
    global $db;
    $posts = $db->query("SELECT * FROM lib");
    return $posts;
}

    //получение тега по его id
function get_category_by_id($id) {
    global $db;
    $categories = $db->query("SELECT * FROM categories WHERE id = $id");
    foreach ($categories as $category) {
        return $category["category_name"];
    }
}

    //получение автора по его id
function get_author_by_id($id) {
    global $db;
    $authors = $db->query("SELECT * FROM authors WHERE id = $id");
    foreach ($authors as $author) {
        return $author["author_name"];
    }
}
    
    //получение картинки по её id
function get_image_by_id($id) {
    global $db;
    $images = $db->query("SELECT * FROM images WHERE image_id = $id");
    foreach ($images as $image) {
        return $image["image"];
    }
}
