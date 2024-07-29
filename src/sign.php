<?php
include "../db-connection/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>

<body>
    <div class="main-div">
        <div class="inside-main">
            <form action="../db-connection/login.php" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" value="test24@gmail.com"required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" id="pwd" name="pwd" placeholder="Password" value="123456" required>
                </div>
                <div class="sign_btn">
                    <button type="submit">Sign In</button>
                    <button type="button" onclick="forgotPwd()">Forgot Password</button>

                </div>
            </form>
            <script>
                function forgotPwd(){
                    window.location.href = 'forgot_pwd.php'
                }
            </script>
        </div>
    </div>
</body>

</html>
