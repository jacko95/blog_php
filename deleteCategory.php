<?php
    $db = mysqli_connect("localhost", "root", "", "flutter_blog_tutorial");

    if(!$db){
        echo "Database connect error".mysqli_error();
    }

    $id = $_POST['id'];
    
    $db->query("DELETE FROM category WHERE id = '".$id."'");

    
?>