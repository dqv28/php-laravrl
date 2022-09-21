<?php
    // $age = 15;
    // if ($age >= 18) {
    //     echo 'You are greater than or equal to 18 years old';
    // }else {
    //     echo 'You are so young';
    // }

    // $hours = date("r");
    // echo $hours

    $comments = [
        'Good', 'I Like it', 'How are you?'
    ];
    // echo !empty($comments) ? $comments[0] : 'No comment';

    //coalescing opertor
    // $first_comment = $comments[0] ?? 'No comment';

    $favorite_color = 'red';
    switch ($favorite_color) {
        case 'red':
            echo 'You choose RED';
            break;
        case 'green':
            echo 'You choose GREEN';
            break;
        
        default:
            echo 'No color';
            break;
    }
    

?>