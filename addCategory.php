<?php
    $db = mysqli_connect("localhost", "root", "", "flutter_blog_tutorial");

    if(!$db){
        echo "Database connect error".mysqli_error();
    }

    $name = $_POST['name'];
    $curDate = date('d/m/Y');

    $db->query("INSERT INTO category(name, create_date) VALUES('".$name."', '".$curDate."')");


?>