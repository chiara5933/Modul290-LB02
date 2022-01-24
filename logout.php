<?php 
include("blocks/header.php");
session_start();
?>
 
<div class="content mt-3 ml-3 mr-3 mb-5">
<h1>Logout</h1>

<?php 
    if(!isset($_SESSION["user"])) { 
?>
        <div class="card text-white bg-danger mb-3">
            <div class="card-body">
                <h5>Currently you're not logged in</h5>
                <span>You will be redirected to the homepage in a few seconds</span>        
            </div>
        </div>
<?php 
    header( "refresh:5;url=index.php" ); 
}; 
    if(isset($_SESSION["user"])) {
        unset($_SESSION['user']);
        session_destroy();    
?>
        <div class="card text-white bg-success mb-3">
            <div class="card-body">
                <h5>You've been logged out</h5>
                <span>You will be redirected to the homepage in a few seconds</span>        
            </div>
        </div>
<?php 
        header( "refresh:5;url=index.php" ); 
    }; 
include("blocks/footer.php");
?>