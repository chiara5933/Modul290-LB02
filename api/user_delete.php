<?php
include("../includes/connect-database.php");
include("../includes/functions.php");
include("../includes/check-apisecret.php");

$user_id = $_GET["user_id"];

if(isset($user_id)){
    deleteUser($user_id);
} else {
    echo("ERROR - No user_id given");
    die();
}