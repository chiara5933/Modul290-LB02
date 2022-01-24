<?php include("blocks/header.php") ?>

<div class="content mt-3 ml-3 mr-3 mb-5">
    <div class="row">
        <!-- LOGIN -->
        <div class="col-md-6">
            <h2>Login</h2>
            <form method="POST" action="login-protected.php">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>

        <!-- REGISTER -->
        <div class="col-md-6">
            <h2>Register</h2>
            <form method="POST" action="register.php">
                <div class="form-group">
                    <label>First name</label>
                    <input type="text" name="firstname" class="form-control" placeholder="Frist name">
                </div>
                <div class="form-group">
                    <label>Last name</label>
                    <input type="text" name="lastname" class="form-control" placeholder="Last name">
                </div>
                <div class="form-group">
                    <label>EMail address</label>
                    <input type="text" name="emailaddress" class="form-control" placeholder="EMail address">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>Password (confirm)</label>
                    <input type="password" name="passwordconfirm" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>

<?php include("blocks/footer.php") ?>