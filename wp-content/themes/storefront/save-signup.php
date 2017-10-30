<?php
/* Template Name: savesignup */

$connectstr_dbhost = 'localhost';
$connectstr_dbname = 'vardskapet';
$connectstr_dbusername = 'root';
$connectstr_dbpassword = 'root';
$wp_debug = true;


foreach ($_SERVER as $key => $value) {
    //echo $key . ' ' . $value . '<br>';
    if (strpos($key, "MYSQLCONNSTR_") !== 0) {
        continue;
    }
    else {
        $wp_debug = false;
    }
    
    $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}

$conn = new mysqli($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,$connectstr_dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/* change character set to utf8 */
if (!$conn->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $conn->error);
    exit();
} else {
    printf("Current character set: %s\n", $conn->character_set_name());
}

echo "Connected successfully\n";

$stmt = $conn->prepare("INSERT INTO signups (email, signupdate) VALUES (?, ?)");
$stmt->bind_param("ss",$email,$date);

// set parameters and execute
$email = $_POST['email'];
echo $email;
$date = date("Y-m-d H:i:s");
$stmt->execute();

echo "ok\n";
$conn->close();
echo "and here we are";


?>