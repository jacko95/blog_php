<?php
    $db = mysqli_connect("localhost", "root", "", "flutter_blog_tutorial");

    if(!$db){
        echo "Database connect error".mysqli_error();
    }

    $id = $_POST['id'];
    $db->query("UPDATE comments SET isSeen = 1 WHERE id = '".$id."'");

    
?>