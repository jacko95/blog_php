<?php
    $db = mysqli_connect("localhost", "root", "", "flutter_blog_tutorial");

    if(!$db){
        echo "Database connect error".mysqli_error();
    }

    $name = $_POST['name'] ?? "";

    $list = array();

    // if(isset($name)) {
    //     $result = $db->query("SELECT * FROM post_table WHERE category_name = '".$name."'");
    // }
    // $result = $db->query("SELECT * FROM post_table WHERE category_name = '".$name."'");
    $result = $db->query("SELECT * FROM post_table WHERE category_name = 'Flutter'");


    if($result){
        while($row = $result->fetch_assoc()){
            $list[] = $row;
        }
        echo json_encode($list);
    }
?>