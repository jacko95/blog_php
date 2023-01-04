<?php
    $db = mysqli_connect("localhost", "root", "", "flutter_blog_tutorial");

    if(!$db){
        echo "Database connect error".mysqli_error();
    }

    $id = $_POST['id'];
    $result = $db->query("SELECT * FROM post_table WHERE id = '".$id."'");
    $data = mysqli_fetch_array($result);

    if($data['image']){
        unlink('uploads/'.$data['image']);
    }
    
    $db->query("DELETE FROM post_table WHERE id = '".$id."'");

?>