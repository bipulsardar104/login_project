<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="main-div">
        <div class="inside-main">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" id="pwd" name="pwd" placeholder="Password" required>
                </div>
                <div class="sign_btn">
                    <button type="submit">Sign In</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
