<?php
    $db = mysqli_connect("localhost", "root", "", "flutter_blog_tutorial");

    if(!$db){
        echo "Database connect error".mysqli_error();
    }

    $id = $_POST['id'];
    $title = $_POST['title'];
    $body = $_POST['body'];
    $category_name = $_POST['category_name'];
    $create_date = date('d/m/Y');
    $author = $_POST['author'];

    $image = $_FILES['image']['name'];
    $image_path = "uploads/".$image;

    $tmp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name, $image_path);


    $db->query("UPDATE post_table SET image = '".$image."', author = '".$author."', title = '".$title."', body = '".$body."', category_name = '".$category_name."', post_date = '".$create_date."' WHERE id = '".$id."'");


?>