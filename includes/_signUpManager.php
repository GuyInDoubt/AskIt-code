<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dblink.php';
    $userEmail = $_POST['signUpEMail'];
    $userPassword = $_POST['signUpPassword'];
    $cuserPassword = $_POST['c-signUpPassword'];

    $existSql = "SELECT * FROM `users` WHERE userEmail = '$userEmail'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
        $showError = "Email already in use";
    }
    else{
        if($userPassword == $cuserPassword){
            $hash = password_hash($userPassword, PASSWORD_DEFAULT); 
            $sql = "INSERT INTO `users` (`userEmail`, `userPassword`, `timestamp`) VALUES ('$userEmail', '$hash', current_timestamp());";
            $result = mysqli_query($conn, $sql);
            if($result){
                header("Location: /Askit/index.php?signupsuccess=true");
                exit();
            } 
        }
        else{
            $showError = "Passwords do not match";
        }
    }
}

?>