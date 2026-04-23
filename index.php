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

<?php

    if(isset($_SESSION['user'])){
        header("Location: dashboard.php");
        exit;
    }

    if(($_SERVER['REQUEST_METHOD'] === 'POST')){
        $_SESSION['user'] = $_POST['name'];
        setcookie('last_visit', date("F d, Y - h:i A"), time() + 86400);
        header('Location: dashboard.php');
        exit;
    }

?>

<body>

    <form action="index.php" method="post">
        Name: <input type="text" name="name"><br>
        <input type="submit">
    </form>

</body>
</html>