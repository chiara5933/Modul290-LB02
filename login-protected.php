<?php 
session_start();

include("blocks/header.php") 
?>

<?php
$username = $_POST["username"];
$password = $_POST["password"];

if (!@$_SESSION["user_id"]) {
    if (!empty(strlen(trim($username))) && empty(!strlen(trim($password)))) {
        $userid = getDetailsbyUsername($username)["id"];
        $passworddb = getDetailsbyUsername($username)["password"];
        $success = 1;
        
        if($password != $passworddb){
            $success = 0;
        };

        $_SESSION["user_id"] = $userid;

    } else {
        $success = 0;
    }; 
} else {
    $success = 1;
};
?>

<!-- ------------------------------------ -->

<div class="content mt-3 ml-3 mr-3 mb-5">
<h1>Login protected</h2>

<?php if($success == 0) { ?>
<div class="card text-white bg-danger mb-3">
    <div class="card-body">
        <h5>Currently you're not logged in or your password is wrong</h5>
        <span>You will be redirected to the login page in a few seconds</span>        
    </div>
</div>
<?php }; ?>

<?php if($success == 1) { ?>
<div class="card text-white bg-success mb-3">
    <div class="card-body">
        <h5>Login successful</h5>
        <span>Successfully logged in</span>        
    </div>
</div>



<p>If you can see this message, it means that you have successfully logged in.</p>
<hr />
<p>
Username : <?php print_r(getUserDetails($_SESSION["user_id"])["username"]); ?><br /> 
EMail address : 
</p>

<a type="button" href="logout.php" class="mt-1 mr-2 btn btn-danger">Logout</a>
</div>

<?php }; ?>

<?php include("blocks/footer.php") ?>