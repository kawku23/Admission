<?php
// Check if passphrase is submitted
if(isset($_POST['$authPassphrase'])) {
    $passphrase = $_POST['$authPassphrase'];

    // Validate the passphrase (e.g., check against the one sent via email)
    $correct_passphrase = "passphrase_from_email"; // Replace with the actual passphrase

    if($passphrase === $correct_passphrase) {
        // Passphrase is correct, redirect to activate.php
        header("Location: activate.php");
        exit();
    } else {
        // Passphrase is incorrect, display an error message
        echo "Incorrect passphrase. Please try again.";
    }
} else {
    // Passphrase not submitted, redirect to a different page or display an error message
    echo "Passphrase not submitted.";
}
?>
