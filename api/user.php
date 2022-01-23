<pre>
<?php
include("../includes/connect-database.php");
include("../includes/functions.php");

if(!isset($_GET["secret"])) {
    echo("ERROR - no secret set!");
    die();
};

if(!checkAPIKey($_GET["secret"])) {
    echo "ERROR - API Secret is invalid!";
}


if(isset($_GET["user_id"])){
    global $database;
    $prepared = $database->prepare('SELECT * FROM t_users where id = "'.$_GET["user_id"].'"');
    $prepared->execute();
    var_dump($prepared->fetchAll(\PDO::FETCH_ASSOC));
} else {
    var_dump(getAllItemsFromTable("t_users"));
}

