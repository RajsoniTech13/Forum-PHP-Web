<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
<?php
$showError = "false";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';


    function sendmail($email,$v_code){
        require ("PHPMailer/Exception.php");
        require ("PHPMailer/PHPMailer.php");
        require ("PHPMailer/SMTP.php");
       
        $mail= new PHPMailer(true);

        try {
            // Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                         //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'davidmailsender28@gmail.com';                     //SMTP username
            $mail->Password   = 'cmdidroemteyekbw';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       =  465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('davidmailsender28@gmail.com', 'Idiscuss');
            $mail->addAddress($email);     //Add a recipient
         

        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Email Verification from David';
            $mail->Body    = "Thanks for SignUp! <br> 
            Click here to Verify the Email
            <a href='http://localhost/forum/verify.php?email=$email&v_code=$v_code'>Verify</a>";
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            return true;
        } catch (Exception $e) {    
            // return false;
            // return false;
            // echo"Eroor";
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

        }
    }

    $user_Name = $_POST['signupName'];
    $user_email = $_POST['signupEmail'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupcPassword'];

    // Check whether this email exists
    $existSql = "select * from `users` where user_email = '$user_email'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
        $showError = "Email already in use";
    }
    else{
        if($pass == $cpass){
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $v_code = bin2hex( random_bytes(12));
            $sql = "INSERT INTO `users` (`user_name`,`user_email`, `user_pass`, `verification_code`, `is_verify`, `timestamp`) VALUES ('$user_Name', '$user_email', '$hash','$v_code','0', current_timestamp())";
            $result = mysqli_query($conn, $sql);   
            if($result && sendmail($_POST['signupEmail'],$v_code)){
                $showAlert = true;
                header("Location: /forum/index.php?signupsuccess=true");
                exit();
            }
        }
        else{
            $showError = "Passwords do not match";       
        }
    }
   echo ' <div class="container my-4" >
        <div class="jumbotron">
            <h1 class="display-4">'.$showError.'</h1>
            <hr class="my-4">
            <h3>Please go back and Sign in properly</h3>
        </div>
    </div>';
    // header("Location: /forum/index.php?signupsuccess=false&error=$showError");
}
?>
</html>