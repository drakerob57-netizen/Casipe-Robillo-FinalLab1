<?php
    // Start the session to track user data
    session_start();
    // Set the timezone to Manila
    date_default_timezone_set('Asia/Manila');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<?php

    // If user is already logged in, redirect to dashboard
    if(isset($_SESSION['user'])){
        header("Location: dashboard.php");
        exit;
    }

    // Handle form submission (login)
    if(($_SERVER['REQUEST_METHOD'] === 'POST')){
        // Store the user's name in the session
        $_SESSION['user'] = $_POST['name'];
        // Set a cookie for the user's last visit if not already set
        if(!isset($_COOKIE['last_visit'])){
            setcookie('last_visit', date("F d, Y - h:i A"), time() + 86400);
        }
        // Redirect to dashboard after login
        header('Location: dashboard.php');
        exit;
    }

?>

<body>
    <div class="container vh-100">
        <div class="row align-items-center text-center h-100">
            <div class="col">
                <!-- Login form for user to enter their name -->
                <form action="index.php" method="post">
                    Name: <input type="text" name="name"><br><br>
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>