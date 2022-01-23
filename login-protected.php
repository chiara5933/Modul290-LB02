<?php include("blocks/header.php") ?>

<?php
 // $_POST["username"]
 // $_POST["password"]
?>
 

<div class="content mt-3 ml-3 mr-3 mb-5">
<h1>Login protected</h2>

<div class="card text-white bg-danger mb-3">
    <div class="card-body">
        <h5>Currently you're not logged in</h5>
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
Username : <br /> 
EMail address : 
</p>

<a type="button" href="logout.php" class="mt-1 mr-2 btn btn-danger">Logout</a>
</div>

<?php include("blocks/footer.php") ?>