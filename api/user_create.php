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