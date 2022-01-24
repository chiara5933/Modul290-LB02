<?php include("blocks/header.php") ?>
<?php
session_start();
// $_POST["username"]
 // $_POST["password"]
?>
 

<div class="content mt-3 ml-3 mr-3 mb-5">
<h1>Logout</h1>

<?php if(!isset($_SESSION["user_id"])) { ?>
<div class="card text-white bg-danger mb-3">
    <div class="card-body">
        <h5>Currently you're not logged in</h5>
        <span>You will be redirected to the homepage in a few seconds</span>        
    </div>
</div>
<?php header( "refresh:5;url=index.php" ); ?>
<?php }; ?>

<?php if(isset($_SESSION["user_id"])) { ?>
<?php session_destroy(); ?>
<div class="card text-white bg-success mb-3">
    <div class="card-body">
        <h5>You've been logged out</h5>
        <span>You will be redirected to the homepage in a few seconds</span>        
    </div>
</div>
<?php header( "refresh:5;url=index.php" ); ?>
<?php }; ?>

<?php include("blocks/footer.php") ?>