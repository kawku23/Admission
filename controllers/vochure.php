<?php
include_once '../model/datacon.php';
include_once '../model/token.php';
include_once '../model/v_log_class.php';
?>

<?php


function getCurrentDateTime() {
    return date('Y-m-d H:i:s');
}

$voucherStatuses = ['avaliable', 'used', 'sold'];

for ($i = 0; $i < 100; $i++) {
    $applicationNumber = generateApplicationNumber();
    $pin = generatePin();
    $voucherStatus = 'avaliable';
    $date_created = getCurrentDateTime();
    $date_updated = $date_created;

    $sql = "INSERT INTO vendor_token_admin (application_number, pin, voucher_status, date_created, date_updated, admin_id, vendorID)
            VALUES ('$applicationNumber', '$pin', '$voucherStatus', '$date_created', '$date_updated', NULL, NULL)";

    if ($conn->query($sql) === TRUE) {
        echo "Record $i inserted successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
    }
}

$conn->close();
?>
