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


$mailBody = "Kontaktförfrågan\nNamn: ".$fullname."\nFöretag: ".$company."\nTelefon: ".$phone."\nEmail: ".$email;
$mailTitle = "Kontakförfrågan";

wp_mail('info@vardskapet.se',$mailTitle,$mailBody);

echo 'ok';

?>