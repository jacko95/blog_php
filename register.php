<?php
    $db = mysqli_connect("localhost", "root", "", "flutter_blog_tutorial");

    if(!$db){
        echo "Database connect error".mysqli_error();
    }

    $name = $_POST['name'];//risponde ad una post??
    $username = $_POST['username'];//risponde ad una post??
    $password = $_POST['password'];//risponde ad una post??

    $sql = "SELECT * FROM login_register WHERE username = '".$username."'";

    $query = mysqli_query($db, $sql);

    $userdata = array();

    $count = mysqli_num_rows($query);

    if($count == 1){
        echo json_encode("Errore");
    }
    else{
        $insert = "INSERT INTO login_register(name, username, password) VALUES ('".$name."', '".$username."', '".$password."')";
        $result = mysqli_query($db, $insert);

        if($result){
            $sql = $db->query("SELECT * FROM login_register WHERE username = '".$username."'");
            $query = mysqli_query($db, $sql);
            $data = mysqli_fetch_array($query);
            $userdata = $data;
        }
        echo json_encode($userdata);
    }
?>