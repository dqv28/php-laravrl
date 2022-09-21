<?php
    $some_number = array(1,3,4,6);
    $fruit = ['pineapple', 'melon', 'apple'];
    print_r($fruit);

    //Associative array
    $colors = [
        3 => 'red',
        5 => 'green',
        7 => 'blues'
    ];

    //key as string
    $hex_color = [
        'red' => 'FF0000',
        'green' => '#00FF00'
    ];

    var_dump(json_encode($hex_color))

?>