<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

// Capture form data
$email = $_POST['email'];
// Other form data can be captured similarly

$mail = new PHPMailer(true);


try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; // Set the SMTP server to send through
    $mail->SMTPAuth   = true; // Enable SMTP authentication
    $mail->Username   = 'rgriya2210@gmail.com'; // SMTP username
    $mail->Password   = 'Ashish2004'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465; // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    // Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress($email); // Use the captured email address

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Your Study Group Confirmation';
    $mail->Body    = 'Thank you for creating a study group. Here are the details: ...';
    $mail->AltBody = 'This is a plain-text version of the email content.';

    $mail->send();
    echo 'Confirmation email has been sent';
} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
