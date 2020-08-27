<?php 

require 'dbh.php';

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'gordonaj19@gmail.com';                     // SMTP username
    $mail->Password   = 'jadcom@1';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
    //Recipients
    $mail->setFrom('gordonaj19@gmail.com', 'So-Quick Traders');
    $mail->addAddress('gordonaj19@gmail.com', 'Joe User');     // Add a recipient
    $mail->addReplyTo('no-reply@gmail.com', 'No Reply');
    

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Password Reset';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
if (isset($_POST['reset'])) {
    $conn = config::connect();
    $email = $_POST['email'];
    // $password = $_POST['password'];

    if (!empty($email)) {
        $query = "SELECT * FROM soquickt_loginsystem.users WHERE usersEmail=:usersEmail";
         $stmt = $conn->prepare($query);
      
        $stmt->execute(
            array(
                'usersEmail' => $email
            )
        );
        $rowcount = $stmt->rowCount();
        if ($rowcount > 0) {
            $code = rand(100,999);
            $message = "Your activation link is: https://www.soquicktraders.com/new-password.php?email=$email&code=$code";  
            ini_set("SMTP","ssl:smtp.gmail.com" );
            ini_set("smtp_port","465");
            ini_set('sendmail_from', 'gordonaj19@gmail.com'); 
            mail($email, "Send Code", $message);
            echo "Email sent";
            $query2 = "UPDATE usersPwd SET usersPwd=:usersPwd WHERE usersEmail=:usersEmail";
        } else {
            echo "<div class='alert alert-danger' role='alert'>Email does not exists</div>";
        }
    }


} else {
    header("Location: index.php");
}