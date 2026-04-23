<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Welcome, " .$_SESSION['user']. "<br>";
        echo "Today is: ".date("F d, Y - h:i A");
        echo "Your last visit was: ".$_COOKIE['last_visit'];
    ?>

    <form action="logout.php" method="POST">
        <button type="submit" name="submit">Log Out</button>
    </form>
    
</body>
</html>