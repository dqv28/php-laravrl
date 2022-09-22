<?php
    if(isset($_POST['submit'])){
        $permitted_extentions = ['png','jpg','jpeg','gif'];
        $file_name = $_FILES['upload']['name'];
        if (!empty($file_name)) {
            $file_size = $_FILES['upload']['size'];
            $file_tmp_name = $_FILES['upload']['tmp_name'];
            $destination_path = "upload/${file_name}";
            $file_extention = explode('.', $file_name);
            $file_extention = strtolower(end($file_extention));
            // echo "$file_name, $file_size, $file_extention, $destination_path";

            //validate file extention permitted
            if (in_array($file_extention, $permitted_extentions)) {
                if ($file_size <= 1000000) {
                    move_uploaded_file($file_tmp_name, $destination_path);
                    $error_message = '<p style="color:green;"></p>';
                }else {
                    $error_message = '<p style="color:red;">File too big</p>';
                };
            }else {
                $error_message = '<p style="color:red;">Invalid file type</p>';
            };
        }else {
            $error_message = '<p style="color:red;">No file selected, please try again</p>';
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
    <h1>File upload in PHP</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
        Choose your image to upload
        <input type="file" name="upload">
        <input type="submit" value="submit" name="submit">
    </form>
    <?php echo $error_message ?? ''?>
</body>
</html>