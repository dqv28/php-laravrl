<?php
    session_start();
    if (isset($_SESSION['email'])) {
        echo "<h1>Welcome to Dashboard page</h1>";
        echo "email: ". $_SESSION['email']."</br>";
        echo "<a href='/php/docs-php/logout.php'>Logout</a>";
    }else {
        echo "<h1>Welcome guest to Dashboard</h1>";
        echo "<a href='/php/docs-php/sessions.php'>Back to login</a>";
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>