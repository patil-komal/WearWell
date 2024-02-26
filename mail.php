<?php
include("./smtp/PHPMailerAutoload.php");

if (isset($_POST['getotp'])) {
    $email = $_POST["email"];

    // verify the email address in database    
    // if (user_verification) {
        $enterOTP = rand(100000,1000000);
        if (function_exists('smtp_mailer')) {
            smtp_mailer("$email", "Enter the otp for Registering.", "Your OTP is: $enterOTP");
            echo $enterOTP;
        }
    // } else {
        // echo null;
    // }
}
?>


<?php
function smtp_mailer($to, $subject, $msg)
{
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    //$mail->SMTPDebug = 2; 
    $mail->Username = "adipathak7488@gmail.com";
    $mail->Password = "spmg rvnm ngzb wllq";
    $mail->SetFrom("adipathak7488@gmail.com");
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->AddAddress($to);
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => false
        )
    );
    if (!$mail->Send()) {
        echo $mail->ErrorInfo;
    }
}
?>

<?php
    if(isset($_POST['submitValue'])){
        $userOTP = $_POST['userOTP'];
        $systemOTP = $_POST['systemOTP'];
        $email = $_POST['email'];
        if ($userOTP == $systemOTP) {
            echo 1;
        }
        else{
            echo 0;
        }
    }
?>
