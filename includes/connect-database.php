<?php

$dbname = "m290_lb02";
$dbhost = "localhost";
$dbusername = "m290_lb02";
$dbpassword = "cg8yz6sb2kd1zv2ar7tn";

$database = new PDO("mysql:dbname={$dbname};host={$dbhost}", $dbusername, $dbpassword);
$database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$database->exec('set names utf8');

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

function registerUser($username, $password, $emailaddress, $firstname, $lastname) {
    global $database;
    $date = time();
    $sql = "INSERT INTO `t_users` (`id`, `disabled`, `username`, `password`, `firstname`, `lastname`, `emailaddress`) 
            VALUES (NULL, '0', '" . $username . "', '" . $password . "', '" . $firstname . "', '" . $lastname . "', '" . $emailaddress . "');";
    $database->query($sql);
}

function deleteUser($id) {
    global $database;
    $sql = "DELETE FROM `t_users` WHERE `t_users`.`id` = {$id}";
    $database->query($sql);
}

function getUserDetails($userid) {
    global $database;
    $sql = "SELECT * FROM `t_users` WHERE `id` = {$userid}";
    $prepared = $database->prepare($sql);
    $prepared->execute();
    return $prepared->fetchAll(\PDO::FETCH_ASSOC);
}

function getDetailsbyUsername($username) {
    global $database;
    $sql = 'SELECT * FROM `t_users` WHERE `username` = "'.$username.'"';
    $prepared = $database->prepare($sql);
    $prepared->execute();
    return $prepared->fetchAll(\PDO::FETCH_ASSOC)[0];
}

function updateUserSingle($user_id, $needle, $newvalue) {
    global $database;
    $sql = "UPDATE `t_users` SET `{$needle}` = '{$newvalue}' WHERE `t_users`.`id` = {$user_id}";
    $database->query($sql);
}