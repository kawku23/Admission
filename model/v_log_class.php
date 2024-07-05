<?php
// Log Object
class Logging{
	// database connection and table name
    private $conn;
  
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

   
    function UserIpAddress() {
          $ipaddress = '';
          if(!empty($_SERVER['HTTP_CLIENT_IP'])){
          //ip from share internet
          $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
          }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
          //ip pass from proxy
          $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
          }else{
          $ipaddress = $_SERVER['REMOTE_ADDR'];
          }
          return $ipaddress;
    }

    function SystemLogging($Username, $Page, $Subject, $Activity, $IpAddress){
        $data ="LOG";
        $trackid =rand(1000, 9999);
        $date=date("Ymdms");
        $ID = $data.$trackid.$date;

    	$query="INSERT INTO `vendor_system_audit`(`id`, `vendorID`, `instituitin_name`, `ip_address`, 
        `page`, `subject`, `activity`, `datetime_created`) 
        VALUES ('$ID','$vendorID','$instituition_name','$ipaddress','$page','$subject','$activity',
        NOW())";
    	// prepare query statement
           $result = $this->conn->prepare($query);
           // execute query
           $result->execute();
    }
}

    ?>