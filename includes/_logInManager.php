<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dblink.php';
    $logInMail = $_POST['logInEmail'];
    $logInPass = $_POST['logInPassword'];

    $sql = "SELECT * FROM `users` WHERE userEmail = '$logInMail'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($logInPass, $row['userPassword'])){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['userEmail'] = $logInMail;
            echo "logged in". $logInMail;
        }
        header("Location: /Askit/index.php");
    }
    header("Location: /Askit/index.php");
}

?>