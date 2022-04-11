<?php

    $email = $_POST['email'];
    $password = $_POST['password'];
    $checkBox = $_POST['checkbox1'];

        if(empty($email) && empty($password)){
            echo "Wa kay email BOANG <br>";
        }
        else{
            echo "Your email is " . $email . "<br>";
            echo "Your password is " . $password . "<br>";
        }
        if(isset($checkBox)){
            echo "You are remembered";
        }else{
            echo "luoy ka";
        }
?>