<?php
require 'dbh.php';


if (isset($_POST["signup"])) {

    
    $conn = config::connect();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $name = $_POST['name'];
    $email_err = '';

    // if (insertUser($conn, $email,$password)) {
    //      $_SESSION['usersEmail'] = $email;
    //      header("Location: profile.php");

        
    // } 
     
//          if (!empty($_POST['mail'])){
//         $stmt = $conn->prepare("SELECT * FROM users WHERE usersEmail = ?");
//         $stmt->execute([$_POST['mail']]);
//         $users = $stmt->fetchAll(FETCH_OBJ);
//         foreach($users as $user) {
//         if ($user) {
//             // user found
//             $email_err = "Email already exists!";
//         }
//     }
//  } else {
    if (!empty($email) || (!empty($password))) {
        $query = "SELECT * FROM soquickt_loginsystem.users WHERE usersEmail=:usersEmail";
    $stmt = $conn->prepare($query);
    // $query->bindParam(":usersEmail", $email);
    //  $query->bindParam(":usersPwd", $password);
    $stmt->execute(
        array(
            'usersEmail' => $email
        )
    );
    $rowcount = $stmt->rowCount();
    if ($rowcount == 1) {
         $_SESSION['email'] = $_POST['email'];
            // $_SESSION['use'] = $password;
        header("Location: signup.php?error=taken");
        exit();  
    } else {





 

    
    $query = "INSERT INTO soquickt_loginsystem.users (usersName, usersEmail,usersPwd,usersNum) 
    VALUES(:usersName, :usersEmail, :usersPwd, :usersNum)";
    $stmt = $conn->prepare($query);
    // $query->bindParam(":usersEmail", $email);
    //  $query->bindParam(":usersPwd", $password);
    $stmt->execute(['usersName'=>$name,'usersEmail'=>$email, 'usersPwd'=>$password, 'usersNum'=>$phone]);
    
    $_SESSION['use'] = $password;
    header("Location: index.php?success=signup");
    exit(); 
    }
    } 
}

//}

// function insertUser($conn, $email, $password) {
//     $query = $conn->prepare("INSERT INTO users(usersEmail,usersPwd) VALUES(:usersEmail, :usersPwd");
//     $query->bindParam(":usersEmail", $email);
//      $query->bindParam(":usersPwd", $password);
//    return $query->execute();
   
   
    // $users = $sql->fetchAll(PDO::FETCH_OBJ);
    // try {
    //     $conn->beginTransaction();
    //     foreach($users as $row){
    //     $sql->execute($row);
    // }
    // } catch(Exception $e) {
    //     $conn->rollback();
    //     throw $e;
    // }

//}