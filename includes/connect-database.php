<?php
$dbname = "m290_lb02";
$dbhost = "localhost";
$dbusername = "m290_lb02";
$dbpassword = "cg8yz6sb2kd1zv2ar7tn";

$database = new PDO("mysql:dbname={$dbname};host={$dbhost}", $dbusername, $dbpassword);
$database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$database->exec('set names utf8');