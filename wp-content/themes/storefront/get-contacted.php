<?php
/* Template Name: Get Contacted */
$fullname = "";
$company = "";
$phone = "";
$email = "";

if(isset($_POST['fullname'])){
    $fullname = $_POST['fullname'];
}
if(isset($_POST['company'])){
    $company = $_POST['company'];
}
if(isset($_POST['phone'])){
    $phone = $_POST['phone'];
}
if(isset($_POST['email'])){
    $email = $_POST['email'];
}

$headers = array('Content-Type: text/html; charset=UTF-8');

$mailBody = "Kontaktförfrågan<br>Namn: ".$fullname."<br>Företag: ".$company."<br>Telefon: ".$phone."<br>Email: ".$email;
$mailTitle = "Kontakförfrågan";

wp_mail("info@vardskapet.se",$mailTitle,$mailBody,$headers);

echo 'ok' . $email . $mailTitle . $mailBody;

?>