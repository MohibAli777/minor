<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <section>
        <div class="imgbx">
            <img src="img/13.jpg" alt="">
        </div>
        <div class="contentbx">
            <div class="formbx">
                <h2>Login</h2>
                <form action="admin_login.php" method="POST">
                    <div class="inputbx">
                        <span>Username or Email</span>
                        <input type="text" name="username" id="" placeholder="Enter Your Username or Email">
                    </div>
                    <div class="inputbx">
                        <span>Password</span>
                        <input type="password" name="userpassword" id="" placeholder="Enter Your Password">
                    </div>
                    <div class="remember">
                        <label for=""><input type="checkbox" name="" id="">  Remember me</label>
                    </div>
                    <div class="inputbx">
                        <input type="submit" value="Sign In" name="" id="">
                    </div>
                    <div class="inputbx">
                        <p>Dont Have an Account? <a href="register.php">Sign Up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>   
</body>
</html>