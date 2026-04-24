<?php
    // Start the session to access user data
    session_start(); 
    // Set the timezone to Manila
    date_default_timezone_set('Asia/Manila'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container vh-100">
        <div class="row align-items-center text-center h-100">
            <div class="col">
                <?php
                    // Display welcome message with user's name
                    echo "<h4>Welcome, " .$_SESSION['user']. "<h4><br><br>"; 
                    // Show current date and time
                    echo "<h4>Today is: ".date("F d, Y - h:i A")."<h4><br><br>"; 
                    // Show user's last visit from cookie
                    echo "<h4>Your last visit was: ".$_COOKIE['last_visit']."<h4><br><br>"; 

                    setcookie('last_visit', date("F d, Y - h:i A"), time() + 86400);
                ?>

                <form action="logout.php" method="POST">
                    <!-- Logout form -->
                    <button type="submit" name="submit">Log Out</button> 
                </form>
            </div>
        </div>
    </div>
    </body>
</html>