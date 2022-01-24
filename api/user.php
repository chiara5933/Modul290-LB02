<?php
include("../includes/connect-database.php");
include("../includes/functions.php");
include("../includes/check-apisecret.php");

$user_id = $_GET["user_id"];

if(isset($user_id)){
    var_dump(getUserDetails($user_id));
} else {
    var_dump(getAllItemsFromTable("t_users"));
}

