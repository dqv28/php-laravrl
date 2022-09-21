<?php
    //print_r($_SERVER);
    // print_r($_GET);
    // print_r($POST);

    // if (isset($_GET['name'])) {
    //     echo $_GET['name'];
    // };
    $email = htmlspecialchars($_POST['email']) ?? '';
    $password = htmlspecialchars($_POST['password']) ?? '';
    echo $email;
    echo $password;
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
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <h1>Login to your account</h1>
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