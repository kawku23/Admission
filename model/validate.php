<?php

class Validate {
    // Validate institution name
    public static function validateInstitutionName($name) {
        return !empty($name) && preg_match("/^[a-zA-Z\s]+$/", $name);
    }

    // Validate telephone number
    public static function validateTelephoneNumber($number) {
        return !empty($number) && preg_match("/^[0-9]{10,15}$/", $number);
    }

    // Validate email
    public static function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    // Validate GPS address
    public static function validateGPSAddress($address) {
        return !empty($address);
    }
}

?>