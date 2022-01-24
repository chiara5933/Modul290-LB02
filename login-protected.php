<?php 
include("blocks/header.php"); 
session_start();
?>

<div class="content mt-3 ml-3 mr-3 mb-5">
<h1>Login protected</h2>

<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
    if(checkUser($_POST['username'], $_POST['password']) == 1){
        $_SESSION['user'] = $_POST['username'];
    } else {
        header( "url=index.php" );
    }; // endif
} else {
    header( "url=index.php" );
}; // endif

session_start();
session_regenerate_id(); 
if(!isset($_SESSION['user'])) {
    header("Location: index.php");
}

?>

<div class="card text-white bg-success mb-3">
    <div class="card-body">
        <h5>Login successful</h5>
        <span>Successfully logged in</span>        
    </div>
</div>

<p>If you can see this message, it means that you have successfully logged in.</p>
<p>
Username : <?php print_r(getDetailsbyUsername($_SESSION["user"])["username"]); ?><br /> 
EMail address : <?php print_r(getDetailsbyUsername($_SESSION["user"])["emailaddress"]); ?>
</p>

<a type="button" href="logout.php" class="mt-1 mr-2 btn btn-danger">Logout</a>
</div>

<?php include("blocks/footer.php") ?>