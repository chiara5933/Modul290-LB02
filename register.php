<?php 
include("blocks/header.php"); 

$username = $_POST["username"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$emailaddress = $_POST["emailaddress"];
$password = $_POST["password"];
$passwordconfirm = $_POST["passwordconfirm"];
?>

<div class="content mt-3 ml-3 mr-3 mb-5">
<h1>Register</h1>

<?php if (strlen(trim($username)) > 0 && strlen(trim($firstname)) > 0 && strlen(trim($lastname)) > 0 && strlen(trim($emailaddress)) > 0 && strlen(trim($password)) > 0 && strlen(trim($passwordconfirm)) > 0) { } else {?>
    <div class="card text-white bg-danger mb-3">
        <div class="card-body">
            <h5>Error!</h5>
            <span>Not all fields have been filled in! You will be redirected to the homepage in a few seconds.</span>        
        </div>
    </div>
<?php 
header( "refresh:5;url=index.php" );
};  // endif 
?>




<?php if($password != $passwordconfirm) { ?>
    <div class="card text-white bg-danger mb-3">
        <div class="card-body">
            <h5>Error!</h5>
            <span>The passwords doesn't match please try again. You will be redirected to the homepage in a few seconds.</span>        
        </div>
    </div>
<?php 
header( "refresh:5;url=index.php" );
} else {

$password = md5($password);
registerUser($username, $password, $emailaddress, $firstname, $lastname);

?>
<div class="card text-white bg-danger mb-3">
    <div class="card-body">
        <h5>Sucess!</h5>
        <span>Your User has been created! You will be redirected to the homepage in a few seconds.</span>        
    </div>
</div>

<?php
header( "refresh:5;url=index.php" );
};


?>


<?php  ?>



</div>

<?php include("blocks/footer.php") ?>