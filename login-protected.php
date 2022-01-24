<?php 
include("blocks/header.php"); 

session_start();
if( isset($_POST['username']) && isset($_POST['password']))
{
    var_dump($_POST);

    print_r(checkUser($_POST['username'], $_POST['password']));

    if(checkUser($_POST['username'], $_POST['password']) == 1){
        // if auth successful set session cookie
        $_SESSION['user'] = $_POST['username'];
    } else {
        header( "Location: index.php" );
    }
 } else {
     // username and password not given so go back to login
     header( "Location: index.php" );
 }

 session_start();
 session_regenerate_id(); 

?>

<!-- ------------------------------------ -->

<div class="content mt-3 ml-3 mr-3 mb-5">
<h1>Login protected</h2>

<div class="card text-white bg-danger mb-3">
    <div class="card-body">
        <h5>Currently you're not logged in or your password is wrong</h5>
        <span>You will be redirected to the login page in a few seconds</span>        
    </div>
</div>



<div class="card text-white bg-success mb-3">
    <div class="card-body">
        <h5>Login successful</h5>
        <span>Successfully logged in</span>        
    </div>
</div>



<p>If you can see this message, it means that you have successfully logged in.</p>
<hr />
<p>
Username : <?php print_r(getDetailsbyUsername($_SESSION["user"])["username"]); ?><br /> 
EMail address : 
</p>

<a type="button" href="logout.php" class="mt-1 mr-2 btn btn-danger">Logout</a>
</div>


<?php include("blocks/footer.php") ?>