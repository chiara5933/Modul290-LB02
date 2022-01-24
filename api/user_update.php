<?php
include("../includes/connect-database.php");
include("../includes/functions.php");
include("../includes/check-apisecret.php");

$user_id = $_GET["user_id"];
$username = $_GET["username"];
$firstname = $_GET["firstname"];
$lastname = $_GET["lastname"];
$emailaddress = $_GET["emailaddress"];
$password = $_GET["password"];

if(!strlen(trim($user_id)) > 0){
    echo("ERROR - No user_id given");
    die();
}

if (strlen(trim($username)) > 0 || strlen(trim($firstname)) > 0 || strlen(trim($lastname)) > 0 || strlen(trim($emailaddress)) > 0 || strlen(trim($password)) > 0) { } else {
    echo("ERROR - At least one field must be given!");
    die();
}; 

$password = md5($password);

if(!empty(strlen(trim($username)))){
    updateUserSingle($user_id, "username", $username);
    echo("SUCCESS - username updated!");
}
if(!empty(strlen(trim($firstname)))){
    updateUserSingle($user_id, "firstname", $firstname);
    echo("SUCCESS - firstname updated!");
}
if(!empty(strlen(trim($lastname)))){
    updateUserSingle($user_id, "lastname", $lastname);
    echo("SUCCESS - lastname updated!");
}
if(!empty(strlen(trim($emailaddress)))){
    updateUserSingle($user_id, "emailaddress", $emailaddress);
    echo("SUCCESS - emailaddress updated!");
};
if(!empty(strlen(trim($password)))){
    updateUserSingle($user_id, "password", $password);
    echo("SUCCESS - password updated!");
}