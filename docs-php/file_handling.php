<?php
    // Read / Write file on the server
    $file_path = './fruit.txt';
    if (file_exists($file_path)) {
        // echo readfile($file_path);
        $file_handle = fopen($file_path, 'r');
        $file_content = fread($file_handle, filesize($file_path));
        fclose($file_handle);
        echo $file_content;
    }else {
        $file_handle = fopen($file_path, 'w');//open for write
        $file_content = 'banana'.PHP_EOL.'mango'.PHP_EOL.'grape';
        fwrite($file_handle, $file_content);
        fclose($file_handle);

    };

?>