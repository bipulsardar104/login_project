<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>

<body>
    <div class="main-div">
        <div class="inside-main">
            <?php
            session_start();
            if (isset($_SESSION['fname']) && isset($_SESSION['lname'])) {
                $fname = $_SESSION['fname'];
                $lname = $_SESSION['lname'];
                $email = $_SESSION['email'];
                echo "First Name: " . htmlspecialchars($fname) . "<br>";
                echo "Last Name: " . htmlspecialchars($lname) . "<br>";
                echo "Email: " . htmlspecialchars($email) . "<br>";

            } else {
                echo "No session data found.";
            }

            ?>
            <form action="../db-connection/logout.php" method="post">
                <div class="sign_btn">
                    <button type="submit">Log Out</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>