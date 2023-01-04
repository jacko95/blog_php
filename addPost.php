<?php
    $db = mysqli_connect("localhost", "root", "", "flutter_blog_tutorial");

    if(!$db){
        echo "Database connect error".mysqli_error();
    }

    $title = $_POST['title'];
    $body = $_POST['body'];
    $category_name = $_POST['category_name'];
    $create_date = date('d/m/Y');
    $author = $_POST['author'];

    $image = $_FILES['image']['name'];
    $image_path = "uploads/".$image;

    $tmp_name = $FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name, $image_path);


    $db->query("INSERT INTO post_table(image, title, body, category_name, author, post_date) VALUES('".$image."', '".$title."', '".$body."', '".$category_name."', '".$author."', '".$create_date."')");


?>