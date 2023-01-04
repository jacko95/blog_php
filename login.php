<?php
    $db = mysqli_connect("localhost", "root", "", "flutter_blog_tutorial");

    if(!$db){
        echo "Database connect error".mysqli_error();
    }

    $username = $_POST['username'];//risponde ad una post??
    $password = $_POST['password'];//risponde ad una post??

    $sql = "SELECT * FROM login_register WHERE username = '".$username."' AND password = '".$password."'";
    $query = mysqli_query($db, $sql);
    $userdata = array();
    $count = mysqli_num_rows($query);

    if($count == 1){
        $sql = "SELECT * FROM login_register WHERE username = '".$username."' AND password = '".$password."'";
        $query = mysqli_query($db, $sql);
        $data = mysqli_fetch_array($query);
        $userdata = $data;
        echo json_encode($userdata);
    }
    else{
        echo json_encode("Errorino");
    }
?>