<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

class Notification {
  private $mail;

  public function __construct() {
    $this->mail = new PHPMailer(true); // Passing true enables exceptions
    $this->mail->isSMTP();
    $this->mail->Host = 'smtp.gmail.com'; // Use Office 365 SMTP server
    $this->mail->Port = 587; // TLS port
    $this->mail->SMTPSecure = 'tls';
    $this->mail->SMTPAuth = true;
    $this->mail->Username = 'admissionscct356@gmail.com';
    $this->mail->Password = 'kklw rlzy zalt sjdj'; 
    $this->mail->SMTPDebug = 2; // Enable debugging for detailed logs   

    // Set the reply-to address
    $this->mail->addReplyTo('admissionscct356@gmail.com', 'CCT Admissions Reply');
  }

  public function sendRegistrationEmail($userEmail, $authPassphrase) {
    try {
      $this->mail->setFrom('admissionscct356@gmail.com', 'CCT Admissions');
      $this->mail->addAddress($userEmail);
      $this->mail->isHTML(true);
      $this->mail->Subject = 'Vendor Account - Activation';
      $this->mail->Body = "Hi,\n\nYour authentication passphrase is:\n\n<b>$authPassphrase</b>\n\nPlease visit the following link to complete your registration: http://localhost/Admission/view/vendor/verify.php?email=$userEmail\n\nUse the above passphrase to create a new password.";
      $this->mail->AltBody = "Hi,\n\nYour authentication passphrase is: $authPassphrase\n\nPlease visit the following link to complete your registration: http://localhost/Admission/view/vendor/verify.php?email=$userEmail\n\nUse the above passphrase to create a new password.";

      $this->mail->send();
      return true;
    } catch (Exception $e) {
      error_log("Message could not be sent. Mailer Error: {$e->getMessage()}");
      return false;
    }
  }

  public function generatePassphrase() {
    return rand(100000, 999999); // Generate a random passphrase
  }
}
?>
