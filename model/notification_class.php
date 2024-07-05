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
        $this->mail->Host = 'smtp.office365.com';
        $this->mail->Port = 587; // TLS port
        $this->mail->SMTPSecure = 'tls';
        $this->mail->SMTPAuth = true;
        $this->mail->Username = 'dasoma@netconceptsgh.com'; // Your Office365 email address
        $this->mail->Password = 'Wins@123451'; 
        $this->mail->SMTPDebug = 2; 
    }

    public function sendRegistrationEmail($userEmail, $authPassphrase) {
        try {
            $this->mail->setFrom('admissionscct356@gmail.com', 'CCT Admissions');
            $this->mail->addAddress($userEmail);
            $this->mail->isHTML(true);
            $this->mail->Subject = 'Vendor Account - Activation';
            $this->mail->Body    = "Hi,\n\nYour authentication passphrase is: $authPassphrase\n\nClick on the following link to complete your registration: https://..view/vendor/verify.php/verify?email=$userEmail&passphrase=$authPassphrase";
            $this->mail->AltBody = "Thank you for registering. Please use the following passphrase to complete your registration: $authPassphrase. Visit https://example.com/verify?email=$userEmail&passphrase=$authPassphrase to complete registration.";

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
