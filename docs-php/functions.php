<?php

    $y = 22;

    //function is "block of code", with name
    // function sayhello($name) { //function with "arguments"
    //     global $y;
    //     echo "y = $y"."<br>";
    //     echo "Hello $name";
    // };
    // echo $x;
    //sayhello('Vuong') //Call function with "parameters"

    function sum($a = 0, $b = 0) {
        return $a + $b;
    };
    // echo sum(2, 3)

    //Assign a variable to a function
    $multiply = function ($a, $b) {
        return $a + $b;
    };

    //Arrow function
    $substract = fn($a, $b) => $a - $b;

    $name = ['john', 'anna', 'tony'];
    // echo "number of items: ".count($name)

    //search inside array
    var_dump(in_array('elon', $name));
    //insert item
    array_push($name, 'elon');
    //insert to the begining of the array
    array_unshift($name, 'satoshi');
    //remove the last item
    array_pop($name);
    //remove the first item
    array_shift($name);
    //how to remote an item
    unset($name[2]);
    //chunk the array
    $chunked_array = array_chunk($name, 1);
    //print_r($chunked_array);
    $array_one = [1, 3, 5];
    $array_two = [2, 4, 6];
    $merged_array = array_merge($array_one, $array_two);
    // print_r($merged_array);
    //spread operator: Nhan ban array
    $array_three = [...$merged_array];
    $array_four = [...$array_one, ...$array_two];
    //combine array
    $a = ['name', 'age', 'email'];
    $b = ['Vuong', 20, 'vuongdq@gmail.com'];
    $c = array_combine($a, $b);
    // print_r($c);
    // print_r(array_flip($c));
    // print_r(array_keys($c));
    // print_r(array_values($c));
    // array from a range
    $number = range(0, 9);
    //map an array to another array
    //with the same size, but other values
    $squared_numbers = array_map(function($each_number){
        return $each_number * $each_number;
    }, $number);
    //filter array
    $filtered_array = array_filter($number, 
    fn($each_number) => $each_number % 2 == 0);


?>