<?php
class token_class {
    // Function to generate VendorID token
    public function generateVendorID() {
        $token = 'VEN' . substr(str_shuffle('0123456789'), 0, 10);
        return $token;
    }

    public function generateApplicationNumber() {
        $randomNumber = str_pad(mt_rand(0, 99999999), 8, '0', STR_PAD_LEFT);
        return "CCT-" . $randomNumber;
    }

    public function generatePin() {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $pin = '';
        for ($i = 0; $i < 9; $i++) {
            $pin .= $characters[rand(0, $charactersLength - 1)];
        }
        return $pin;
    }

    public function generatePassphrase() {
        return rand(100000, 999999); // Generates a 6-digit random number
    }
}
?>
