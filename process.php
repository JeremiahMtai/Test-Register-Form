<?php

    require_once ('connection.php'); 

    if(isset($_POST['submit']))
    {
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $cpasssword = mysqli_real_escape_string($conn,$_POST['cpassword']);

        if(empty($username) || empty($email) || empty($password) || empty($cpasssword))
        {
            echo "Please Fill the Blank";
        }
        if($password!= $cpasssword)
        {
            echo "Password Not Matched";
        }
        else
        {
            $pass = md5($password);
            $sql = "INSERT INTO user (username, email, password) VALUES('$username','$email','$pass')";
            $result = mysqli_query($conn,$sql);

            if($result)
            {
                echo "Your Record Has Been Recorded in the Database";
            }
            else
            {
                echo "Check Your Query";
            }
        }

    }








?>