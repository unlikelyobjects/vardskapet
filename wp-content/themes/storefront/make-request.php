<?php
/* Template Name: Make a Request */
$address = "";
$audience = "";
$company = "";
$email = "";
$fullname = "";
$participants = "";
$pass = "";
$phone = "";
$purpose = "";
$programme = "";




if(isset($_POST['address'])){
    $address = $_POST['address'];
}
if(isset($_POST['audience'])){
    $audience = $_POST['audience'];
}
if(isset($_POST['company'])){
    $company = $_POST['company'];
}
if(isset($_POST['email'])){
    $email = $_POST['email'];
}
if(isset($_POST['fullname'])){
    $fullname = $_POST['fullname'];
}
if(isset($_POST['participants'])){
    $participants = $_POST['participants'];
}
if(isset($_POST['pass'])){
    $pass = $_POST['pass'];
}
if(isset($_POST['phone'])){
    $phone = $_POST['phone'];
}
if(isset($_POST['purpose'])){
    $purpose = $_POST['purpose'];
}
if(isset($_POST['programme'])){
    $purpose = $_POST['programme'];
}

$headers = array('Content-Type: text/html; charset=UTF-8');

$mailBody = "Föreläsningsförfrågan<br>Namn: ".$fullname."<br>Företag: ".$company."<br>Telefon: ".$phone."<br>Email: ".$email."<br>Adress: ".$address."<br>Publik: ".$audience."<br>Deltagare: ".$audience."<br>Pass: ".$pass."<br>Syfte: ".$purpose."<br>Program: ".$programme;
$mailTitle = "Föreläsningsförfrågan";

wp_mail('info@vardskapet.se',$mailTitle,$mailBody,$headers);

echo 'ok' . $email . $mailTitle . $mailBody;

?>