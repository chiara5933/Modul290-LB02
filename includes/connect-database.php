<?php

$dbname = "m290_lb02";
$dbhost = "localhost";
$dbusername = "m290_lb02";
$dbpassword = "cg8yz6sb2kd1zv2ar7tn";

$database = new PDO("mysql:dbname={$dbname};host={$dbhost}", $dbusername, $dbpassword);

// DB FUNCTIONS
function getAllItemsFromTable($table) {
    global $database;
    $prepared = $database->prepare("SELECT * FROM {$table}");
    $prepared->execute();
    return $prepared->fetchAll(\PDO::FETCH_ASSOC);
}
 
function checkAPIKey($secret) {
    global $database;
    $prepared = $database->prepare('SELECT * FROM t_api WHERE secret ="'.$secret.'"' );
    $prepared->execute();
    $data = $prepared->fetchAll(\PDO::FETCH_ASSOC);
    
    if ($data[0]["secret"] == $secret) {
        return 1;
    } else {
        return 0;
    }
}