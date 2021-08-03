<?php

require_once __DIR__ . "/lib/AdnSmsNotification.php";
session_start();
use AdnSms\AdnSmsNotification;

$number = $_GET["number"];
$msg = $_GET["message"];

// var_dump($_SESSION['user_amount']);

// $msg = str_replace(array("\r", "\n"),"\r",$msg);
// var_dump(preg_replace("/\r|\n/","\r",$msg));
// var_dump(strpos('   ',$msg), $_POST);
// return $msg;

// $product = $_GET["product"];
// $method = $_GET["method"];
// $vehicle_number = $_GET["vehicle_number"];
// $driver = $_GET["driver"];
// $driver_number = $_GET["driver_number"];

// $msg = "Dear Customer \r
// your product $product \r
// will be delivered by $method \r
// Number: $vehicle_number \r
// Driver: $driver \r
// Driver Number: $driver_number \r
// Any Delivery Information 01566339339 \r
// Thanks By \r
// ORIKA CORPORATION ";

$message = $msg;
$recipient = $number; // For SINGLE_SMS or OTP
$requestType = 'SINGLE_SMS'; // options available: "SINGLE_SMS", "OTP"
$messageType = 'TEXT'; // options available: "TEXT", "UNICODE"

/*
 * Sending Single SMS or OTP with sendSms() method
 * ----------
 * Params:
 * ----------
 * $requestType   : Required, Must contain any of the two values: "SINGLE_SMS", "OTP"
 * $message       : Required
 * $recipient     : Required
 * $messageType   : Must contain any of the two values: "TEXT", "UNICODE"
 */

$sms = new AdnSmsNotification();
$message = $sms->sendSms($requestType, $message, $recipient, $messageType);
print_r($message);

