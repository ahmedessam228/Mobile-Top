<?php

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $pass = $_POST['password'];

    $select = "SELECT * FROM `user` WHERE email = '$email' AND password = '$pass'";

    $result = mysqli_query($conn, $select);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if ($user) {
        $_SESSION["user_id"] = $user["id"];
        header('Location: home.php');
    } else {
        echo "<script type ='text/javascript'> alert('incorrect  email or password')</script>";
    }
    // header('Location: ' . $_SERVER['REQUEST_URI']);

}