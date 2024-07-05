<?php
// Include necessary files
include_once '.././model/datacon.php';
include_once '.././model/token_class.php';
include_once '.././model/notification_class.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $institution_name = filter_input(INPUT_POST, 'institution_name', FILTER_SANITIZE_STRING);
    $telephone_number = filter_input(INPUT_POST, 'telephone_number', FILTER_SANITIZE_STRING);
    $email = filter_var(filter_input(INPUT_POST, 'email'), FILTER_VALIDATE_EMAIL);
    $gps_address = filter_input(INPUT_POST, 'gps_address', FILTER_SANITIZE_STRING);
    $date_created = date("Y-m-d H:i:s");
    $date_updated = date("Y-m-d H:i:s");

    
    // Check if institution_name exists
    $check_institution_stmt = $conn->prepare("SELECT * FROM vendor_registration WHERE institution_name = ?");
    $check_institution_stmt->bind_param("s", $institution_name);
    $check_institution_stmt->execute();
    $result = $check_institution_stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>
        alert('Institution already exists');
      </script>";
        exit();
    }

    // Check if telephone_number exists
    $check_telephone_stmt = $conn->prepare("SELECT * FROM vendor_registration WHERE telephone_number = ?");
    $check_telephone_stmt->bind_param("s", $telephone_number);
    $check_telephone_stmt->execute();
    $result = $check_telephone_stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>
        alert('Telephone number already exists');
      </script>";
        exit();
    }

    // Check if email exists
    $check_email_stmt = $conn->prepare("SELECT * FROM vendor_registration WHERE email = ?");
    $check_email_stmt->bind_param("s", $email);
    $check_email_stmt->execute();
    $result = $check_email_stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>
        alert('Email Address already exists');
      </script>";
        exit();
    }

    // Generate VendorID using token_class
    $token = new token_class();
    $vendorID = $token->generateVendorID(); 

    // Prepare SQL statement to insert vendor registration details
    $stmt = $conn->prepare("INSERT INTO vendor_registration (VendorID, institution_name, telephone_number, email, gps_address, date_created, date_updated) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die('MySQL prepare error for vendor registration: ' . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("sssssss", $vendorID, $institution_name, $telephone_number, $email, $gps_address, $date_created, $date_updated);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Send notification email
        $notification = new Notification(); 

        // Generate and insert passphrase into authentication_audit table
        $authPassphrase = $notification->generatePassphrase(); 
        $date_expired = date("Y-m-d H:i:s", strtotime('+60 seconds')); // Calculate expiration time

        $audit_stmt = $conn->prepare("INSERT INTO authenticate_audit (institution_name, status, date_created, date_updated, date_expired, pin) VALUES (?, 'Active', ?, ?, ?, ?)");
        if ($audit_stmt === false) {
            die('MySQL prepare error for authentication audit: ' . $conn->error);
        }

        // Bind parameters
        $audit_stmt->bind_param("sssss", $institution_name, $date_created, $date_updated, $date_expired, $authPassphrase);

        // Execute the audit prepared statement
        if ($audit_stmt->execute()) {
            // Send registration email
            if ($notification->sendRegistrationEmail($email, $authPassphrase)) {
                // Construct the email message for the alert
                $emailMessage = "Registration successful! Please check your email ($email) to complete your registration. Authentication passphrase: $authPassphrase";

                // Encode for safe use in JavaScript alert
                $encodedMessage = htmlspecialchars($emailMessage, ENT_QUOTES);

                // Display alert with the email message and redirect
                echo "<script>
                        alert('$encodedMessage');
                        window.location.href = '../view/vendor/register.php';
                      </script>";
                exit();
            } else {
                echo "Error: Unable to send registration email.";
            }
        } else {
            echo "Error executing authentication audit statement: " . $audit_stmt->error;
        }

        // Close audit statement
        $audit_stmt->close();
    } else {
        echo "Error executing vendor registration statement: " . $stmt->error;
    }

    // Close registration statement
    $stmt->close();
}

// Assuming there is a separate script or background task to update statuses
// Check for expired records and update status to 'Expired'
$current_time = date("Y-m-d H:i:s");
$update_stmt = $conn->prepare("UPDATE authenticate_audit SET status = 'Expired' WHERE status = 'Active' AND date_expired <= ?");
if ($update_stmt === false) {
    die('MySQL prepare error for updating status: ' . $conn->error);
}

// Bind parameters
$update_stmt->bind_param("s", $current_time);

// Execute the update statement
if (!$update_stmt->execute()) {
    echo "Error updating status to 'Expired': " . $update_stmt->error;
}
// Close update statement
$update_stmt->close();
?>

