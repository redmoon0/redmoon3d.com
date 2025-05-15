<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP; // ← ✅ You also need this

require '../phpmailer/src/PHPMailer.php'; // or 'phpmailer/src/PHPMailer.php', etc. if not using Composer
require '../phpmailer/src/SMTP.php'; // or 'phpmailer/src/PHPMailer.php', etc. if not using Composer
require '../phpmailer/src/Exception.php';

function sendOTPEmail($toEmail, $otp) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'mail.redmoon3d.com'; // use your SMTP provider
        $mail->SMTPAuth = true;
        $mail->Username = 'no-reply@redmoon3d.com'; // your email
        $mail->Password = 'No_reply23'; // use Gmail App Password, not actual password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use SMTPS constant for SSL
        $mail->Port = 465;

        $mail->setFrom('no-reply@redmoon3d.com', 'REDMOON');
        $mail->addAddress($toEmail);
        $mail->isHTML(true);
        $mail->Subject = 'Your REDMOON OTP Code';
        $mail->Body = "<h3>Your OTP is: <strong>$otp</strong></h3><p>It expires in 10 minutes.</p>";

        $mail->send();
    } catch (Exception $e) {
        error_log("OTP email failed: " . $mail->ErrorInfo);
    }
}
