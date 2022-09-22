<?php
    /*
        Session are stored in the server
        so it can be used across multipie pages
    */

    session_start();
    if (isset($_POST['submit'])) {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];
        if ($email == 'vuongdq@gmail.com' && $password == '123456') {
            $_SESSION['email'] = $email;
            header('location: dashboard.php');
        }else {
            echo "Incorrect email or password!";
        };
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
    <h1>Login to your account</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <div>
            <label for="email">Email: </label>
            <input type="text" name="email" id="">
        </div>
        <div>
            <label for="password">Password: </label>
            <input type="password" name="password" id="">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>