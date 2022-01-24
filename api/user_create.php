<?php
include("../includes/connect-database.php");
include("../includes/functions.php");
include("../includes/check-apisecret.php");

$username = $_GET["username"];
$firstname = $_GET["firstname"];
$lastname = $_GET["lastname"];
$emailaddress = $_GET["emailaddress"];
$password = $_GET["password"];

if (strlen(trim($username)) > 0 && strlen(trim($firstname)) > 0 && strlen(trim($lastname)) > 0 && strlen(trim($emailaddress)) > 0 && strlen(trim($password)) > 0) { } else {
    echo("ERROR - Not all fields have been filled in!");
    die();
}; 

$password = md5($password);
registerUser($username, $password, $emailaddress, $firstname, $lastname);
echo("SUCCESS - The user has been created!");