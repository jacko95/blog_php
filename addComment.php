<?php
    $db = mysqli_connect("localhost", "root", "", "flutter_blog_tutorial");

    if(!$db){
        echo "Database connect error".mysqli_error();
    }

    $comment = $_POST['comment'];
    $user_email = $_POST['user_email'];
    $post_id = $_POST['post_id'];
    $curDate = date('d/m/Y');

    // $db->query("INSERT INTO comments(comment, user_email, post_id, comments_date) VALUES('".$comment."', '".$user_email."', '".$post_id."', '".$curDate."')");

    $sql = $db->query("SELECT * FROM post_table WHERE id = '".$post_id."'");

    // if($sql){
        $data = mysqli_fetch_array($sql);
        $sum = $data['comments'] + 1;//problema con data[]
        $db->query("INSERT INTO comments(comment, user_email, post_id, comments_date) VALUES ('".$comment."', '".$user_email."', '".$post_id."', '".$curDate."')");
        $db->query("UPDATE post_table SET comments = '".$sum."' WHERE id = '".$post_id."'");
    // }

?>