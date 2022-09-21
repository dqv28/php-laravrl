<?php
    $full_name = 'Vuong dz';
    echo "length: " . strlen($full_name).'<br>';
    //reverse a string
    strrev($full_name);
    //convert toLowercase
    strtolower($full_name);
    strtoupper($full_name);
    //find and replace
    str_replace(' ','-', $full_name);
    if (str_starts_with(strtolower($full_name), 'Vuong')) {
        echo 'Start with Vuong';
    };
    //how to ignore the html string
    echo '<h1>String</h1>';
    echo htmlspecialchars('<h1>String</h1>');
    //htmlspecialchars used to get gata on form
    
?>