<?php
    $db = mysqli_connect("localhost", "root", "", "flutter_blog_tutorial");

    if(!$db){
        echo "Database connect error".mysqli_error();
    }

    $list = array();

    $result = $db->query("SELECT * 
                FROM post_table");

    if($result){
        while($row = $result->fetch_assoc()){
            $list[] = $row;
        }
        echo json_encode($list);
    }
?>