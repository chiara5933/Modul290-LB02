<pre>
<?php
include("../includes/connect-database.php");
include("../includes/functions.php");
include("../includes/check-apisecret.php");

$username = $_POST["username"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$emailaddress = $_POST["emailaddress"];
$password = $_POST["password"];

if (strlen(trim($username)) > 0 && strlen(trim($firstname)) > 0 && strlen(trim($lastname)) > 0 && strlen(trim($emailaddress)) > 0 && strlen(trim($password)) > 0) { } else {
    echo("ERROR - Not all fields have been filled in!");
    die();
}; 


?>