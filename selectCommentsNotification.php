<?php
    $db = mysqli_connect("localhost", "root", "", "flutter_blog_tutorial");

    if(!$db){
        echo "Database connect error".mysqli_error();
    }

    $result = $db->query("SELECT id FROM comments WHERE isSeen = 0");
    $totalValue = mysqli_num_rows($result);
    echo json_encode($totalValue);

?>