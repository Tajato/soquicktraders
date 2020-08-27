<?php
require 'dbh.php';


if (isset($_POST["login"])) {

    
    $conn = config::connect();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $message = '';

    // if (insertUser($conn, $email,$password)) {
    //      $_SESSION['usersEmail'] = $email;
    //      header("Location: profile.php");

        
    // } 
    if (!empty($email) || (!empty($password))) {
    
    $query = "SELECT * FROM users WHERE usersEmail=:usersEmail AND usersPwd=:usersPwd";
    $stmt = $conn->prepare($query);
    // $query->bindParam(":usersEmail", $email);
    //  $query->bindParam(":usersPwd", $password);
    $stmt->execute(
        array(
            'usersEmail' => $email,
            'usersPwd' => $password
        )
    );
    $rowcount = $stmt->rowCount();
    if ($rowcount > 0) {
         $_SESSION['email'] = $_POST['email'];
            // $_SESSION['use'] = $password;
        header("Location: index.php");
        exit();  
    } else {
        header("Location: login.php?error=incorrect");
        exit();
        
        }

    }

    
}

function checkEmail ($conn,$email) {
    $query = $conn->prepare("SELECT * FROM users WHERE usersEmail=:usersEmail");
    $query->bindParam(":usersEmail",$usersEmail); 
    $query->execute();
    if ($query->rowCount() == 1) {
        return false;
    }    else {
        return true;
    }
}