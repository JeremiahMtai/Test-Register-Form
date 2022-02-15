<?php


    $_SERVER = "localhost";
    $user = "root";
    $pwd = "";
    $database = "register";

    $conn = mysqli_connect('localhost', 'root', '', 'register');


    if(!$conn)
    {
       echo "Please Check your Database Connection";
    }










?>