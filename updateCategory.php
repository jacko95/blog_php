<?php
    $db = mysqli_connect("localhost", "root", "", "flutter_blog_tutorial");

    if(!$db){
        echo "Database connect error".mysqli_error();
    }

    $id = $_POST['id'];
    $name = $_POST['name'];
    $curDate = date('d/m/Y');
    
    $db->query("UPDATE category SET name = '".$name."', create_date = '".$curDate."' WHERE id = '".$id."'");


?>